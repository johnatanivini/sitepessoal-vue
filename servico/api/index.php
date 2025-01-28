<?php

use Api\Portfolio;
use Dotenv\Dotenv;
use Api\CustomErrorRenderer;
use Slim\Factory\AppFactory;
use PHPMailer\PHPMailer\PHPMailer;
use Slim\Psr7\Response;
use Psr\Container\ContainerInterface;
use Api\Controllers\PortfolioController;
use Api\Email;
use Api\ValidarFormContato;
use Slim\Exception\HttpNotFoundException;
use Slim\Exception\HttpMethodNotAllowedException;
use Psr\Http\Message\ResponseInterface as ResponseInterface;
use Psr\Http\Message\ServerRequestInterface as RequestInterface;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


$app = AppFactory::create();
$app->setBasePath($_ENV['BASE_PATH']);


$app->addRoutingMiddleware();

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function($request,$handler){
    $response = $handler->handle($request);
    return $response
            ->withHeader('Access-Control-Allow-Origin','*')
            ->withHeader('Access-Control-Allow-Headers','X-Requested-With, Content-Type,Accept,Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods','GET,POST,PUT,DELETE,PATCH,OPTIONS');

});


$errorMiddleware = $app->addErrorMiddleware(true, true, true);



$errorMiddleware->setErrorHandler(
    HttpNotFoundException::class,
    function (RequestInterface $request, Throwable $exception, bool $displayErrorDetails) {

        $response = new Response();
        $response->withHeader('Content-type', 'application/json')->getBody()
            ->write(json_encode(['code' => 0, 'message' => '404 - Página não encotrada']));


        return $response->withStatus(404);
    }
);


$errorMiddleware->setErrorHandler(
    HttpMethodNotAllowedException::class,
    function (RequestInterface $request, Throwable $exception, bool $displayErrorDetails) {
        $response = new Response();
        $response->withHeader('Content-type', 'application/json')->getBody()
            ->write(json_encode(['code' => 0, 'message' => '405 - Método não permitido']));

        return $response->withStatus(405);
    }
);





$app->get('/portfolio', function (RequestInterface $request, ResponseInterface $response, $args) {


    $portfoio = (new Portfolio($request))->getSites();
    $response->withHeader('Content-type', 'application/json')->getBody()->write(json_encode($portfoio));
    return $response;
});

$app->get('/logos', function (RequestInterface $request, ResponseInterface $response, $args) {

    $portfoio = (new Portfolio($request))->getLogotipos();

    $response->withHeader('Content-type', 'application/json')->getBody()->write(json_encode($portfoio));
    return $response;
});


$app->get('/skills', function (RequestInterface $request, ResponseInterface $response, $args) {
    $portfoio = (new Portfolio($request))->getSkills();
    $response->withHeader('Content-type', 'application/json')->getBody()->write(json_encode($portfoio));
    return $response;
});


$app->post('/enviar-email', function (RequestInterface $request, ResponseInterface $response, $args) {

    $message = '';
    

    $validar = new ValidarFormContato($request);
   

    $validar->validar();

    if (!$validar->isValid()) {
         $response->getBody()->write(json_encode($validar->getErros()));
         return $response->withStatus(400);
    }
    $parametros = $validar->getAtributos();

    // Set Message
    $message .= "Email from: " . $parametros->contactName . "<br />";
    $message .= "Email address: " . $parametros->contactEmail . "<br />";
    $message .= "Message: <br />";
    $message .= "<hr>";
    $message .= $parametros->contactMessage;
    $message .= "<br /> ----- <br /> Este email foi enviado do formulário de contato do seu site.. <br />";

    $response =  $response->withHeader('Content-type', 'application/json');

    try {
        /**
         * @var Email $email
         */
        $email = new Email();

        $email->enviar($parametros->contactSubject, $message);

        $response->withStatus(200)->getBody()->write(json_encode(['code' => 1, 'message' => 'Enviado com successo!']));
    
    } catch (Exception $e) {

        $response->withStatus(400)->getBody()->write(json_encode(['code' => 0, 'message' => 'Não foi possível enviar o email', 'error' => $e->getMessage()]));
    }

    return $response;
});


// Catch-all route to serve a 404 Not Fount page ig none of the routes match
// NOTE: make sure this route is defined last

$app->map(['GET','POST','DELETE','PATCH'],'/{routes:.+}',function($request,$response){
   throw new HttpNotFoundException($request);
});

$app->run();
