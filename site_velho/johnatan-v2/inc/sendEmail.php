<?php

// Replace this with your own email address
$siteOwnersEmail = 'contato@johnatanivini.eti.br';


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
	if ($subject == '') { $subject = "Formulario de Contato"; }

	//Check Capcha
    if($contact_captcha != 89){
        $error['contact_captcha'] = "O valor do captcha está errado! Coloque o valor correto.";
    }

   // Set Message
   $message .= "Email from: " . $name . "<br />";
	$message .= "Email address: " . $email . "<br />";
   $message .= "Message: <br />";
   $message .= $contact_message;
   $message .= "<br /> ----- <br /> Este email foi enviado do formulário de contato do seu site.. <br />";

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


   if (!$error) {

      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) { echo "OK"; }
      else { echo "Deu algo errado. Por favor tente novamente.."; }

	} # end if - no validation error

	else {

		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
		$response .= (isset($error['contact_captcha'])) ? $error['contact_captcha'] . "<br />" : null;

		echo $response;

	} # end if - there was a validation error

}