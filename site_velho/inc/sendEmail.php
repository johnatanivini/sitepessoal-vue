<?php

header('ContentType:application/json');

require_once __DIR__."/../vendor/autoload.php";


try{

$mail = new \PHPMailer\PHPMailer\PHPMailer();

// Replace this with your own email address
$siteOwnersEmail = 'contato@johnatanivini.eti.br';

/**
 * Validacao
 */
if($_POST) {

    $name = trim(stripslashes($_POST['contactName']));
    $email = trim(stripslashes($_POST['contactEmail']));
    $subject = trim(stripslashes($_POST['contactSubject']));
    $contact_message = trim(stripslashes($_POST['contactMessage']));
    $contact_captcha = intval(trim(stripslashes($_POST['contactCaptcha'])));

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


    $mail->Host = "smtp.kinghost.net";
    $mail->Username = $siteOwnersEmail;
    $mail->Password = "iviniJ27";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->isHTML(true);
    $mail->CharSet = "utf-8";
    $mail->SMTPSecure = "ssl";
    $mail->From = $siteOwnersEmail;
    $mail->FromName = "Johnatan";
    $mail->Subject = $subject;
    $mail->addAddress('johnatan.ivini@gmail.com', 'Johnatan');
    $mail->addReplyTo($email, $name);

    $mail->Body = $message;

    if ($mail->send()){
        echo '{"success":true}';
    }
}

}catch (Exception $e){

    echo '{"success":"'.$e->getMessage().'"}';
}