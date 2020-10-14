<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Nenhum dados enviado!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


//var_dump($_POST);


$body = "O $name, com e-mail $email_address te enviou a seguinte mensagem : <br> <hr> $message </hr> <br> Segue seu telefone ($phone) para contato.";

require_once("PHPMailer-5.1.0/class.phpmailer.php");

$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
$mail->IsHTML(true);
$mail->SMTPAuth = true;
$mail->IsSMTP();
$mail->Host = "smtp.johnatanivini.eti.br";
$mail->Username ="contato@johnatanivini.eti.br";
$mail->Password = "iviniJ27";
$mail->Port=587;
$mail->SMTPSecure="SSL";
//$mail->SMTPDebug = 2;
$mail->From="contato@johnatanivini.eti.br";
$mail->FromName="Johnatan Ívini";
$mail->Subject= $name." - Contato Site - Johnatan Ívini";
$mail->AddAddress("johnatan.ivini@gmail.com","Johnatan Ívini");
$mail->AddReplyTo($email_address);



$mail->Body = $body;

if($mail->Send()){

    if(isset($_POST['briefing'])){
    $newR = new PHPMailer();
    $newR->CharSet = "UTF-8";
    $newR->Host = "smtp.johnatanivini.eti.br";
    $newR->Username ="contato@johnatanivini.eti.br";
    $newR->Password = "iviniJ27";
    $newR->Port=587;
    $newR->SMTPSecure="SSL";
    $newR->IsHTML(true);
    $newR->From="contato@johnatanivini.eti.br";
    $newR->FromName="Johnatan Ívini";
    $newR->Subject= " Contato Site - Johnatan Ívini";
    $newR->AddAddress($email_address,$nome);
    $newR->Body = "<h1> Brienfing de Site  </h1>
					Olá, {$name} Este anexo contém várias perguntas para saber quais  necessidades de seu negócio,<br> para facilitar a nosa comuniçação e facilidade de entendimento dos objetivos, <br>fique a vontade para editar, copiar e me enviar para melhor avliar o seu orçamento.
					<hr>
					Email enviado às ".date('d-m-Y H:s').", do site <a href='http://johnatanivini.eti.br'>Johnatan Ívini</a>.
";
        $newR->AddAttachment('/home/johnatanivini/www/briefing/briefing.docx');
        $newR->Send();

    }
        echo 0;

}else{
    echo 1;
}