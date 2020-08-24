<?php

use DI\Container;
use Api\Portfolio;
use Dotenv\Dotenv;
use Slim\Factory\AppFactory;
use PHPMailer\PHPMailer\PHPMailer;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dot = $dotenv->load();

echo "<pre>";
var_dump($dot);
die();
$container = new Container();

$container->set('mail', function () {

    $siteOwnersEmail = getenv('MAIL_USER');

    $mail = new PHPMailer();
    $mail->Host = getenv('MAIL_HOST');
    $mail->Username = $siteOwnersEmail;
    $mail->Password = getenv('MAIL_PASS');
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->isHTML(true);
    $mail->CharSet = "utf-8";
    $mail->SMTPSecure = "ssl";
    $mail->From = $siteOwnersEmail;
    $mail->FromName = getenv('MAIL_NAME');
    $mail->addAddress(getenv('MAIL_ADDRESS'), getenv('MAIL_NAME'));

    return $mail;
});

AppFactory::setContainer($container);

$app = AppFactory::create();

$app->setBasePath('/api');

$app->get('/portfolio', function (Request $request, Response $response, $args) {

    echo "<pre>";
    $portfoio = (new Portfolio($request))->getSites();


    $response->withHeader('Content-type', 'application/json')->getBody()->write(json_encode($portfoio));
    return $response;
});

$app->get('/logos', function (Request $request, Response $response, $args) {

    $portfoio = (new Portfolio($request))->getLogotipos();

    $response->withHeader('Content-type', 'application/json')->getBody()->write(json_encode($portfoio));
    return $response;
});


$app->get('/skills', function (Request $request, Response $response, $args) {
    $portfoio = (new Portfolio($request))->getSkills();
    $response->withHeader('Content-type', 'application/json')->getBody()->write(json_encode($portfoio));
    return $response;
});


$app->post('/enviar-email', function (Request $request, Response $response, $args) {

    $message = '';
    $parametros = $request->getParsedBody();

    $name = trim(stripslashes($parametros['contactName']));
    $email = trim(stripslashes($parametros['contactEmail']));
    $subject = trim(stripslashes($parametros['contactSubject']));
    $contact_message = trim(stripslashes($parametros['contactMessage']));
    $contact_captcha = intval(trim(stripslashes($parametros['contactCaptcha'])));

    // Check Name
    if (strlen($name) < 2) {
        $error['name'] = "Por favor, coloque seu nome";
    }
    // Check Email
    if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
        $error['email'] = "Por favor, entre com um email válido.";
    }
    // Check Message
    if (strlen($contact_message) < 15) {
        $error['message'] = "Por favor entre com seu comentário, deverá ser maior que 15 caractéres.";
    }
    // Subject
    if ($subject == '') {
        $subject = "Formulario de Contato";
    }

    //Check Capcha
    if ($contact_captcha != 89) {
        $error['contact_captcha'] = "O valor do captcha está errado! Coloque o valor correto.";
    }

    // Set Message
    $message .= "Email from: " . $name . "<br />";
    $message .= "Email address: " . $email . "<br />";
    $message .= "Message: <br />";
    $message .= "<hr>";
    $message .= $contact_message;
    $message .= "<br /> ----- <br /> Este email foi enviado do formulário de contato do seu site.. <br />";

    $response =  $response->withHeader('Content-type', 'application/json');
    try {
        /**
         * @var PHPMailer $email
         */
        $email = $this->get('mail');

        $email->Subject = $subject;
        $email->Body = $message;

        $email->send();

        $response->withStatus(200)->getBody()->write('{success:true}');
    } catch (Exception $e) {

        $response->withStatus(400)->getBody()->write('{success:false}');
    }

    return $response;
});

$app->run();
