<?php

namespace Api;

use PHPMailer\PHPMailer\PHPMailer;

class Email extends PHPMailer
{

    public function __construct()
    {

        $this->Host = $_ENV['MAIL_HOST'];
        $this->Username = $_ENV['MAIL_USER'];
        $this->Password = $_ENV['MAIL_PASS'];
        $this->Port = 587;
        $this->SMTPAuth = true;
        $this->isHTML(true);
        $this->CharSet = "utf-8";
        $this->SMTPSecure = false;
        $this->From = $_ENV['MAIL_USER'];
        $this->FromName = $_ENV['MAIL_NAME'];
        $this->addAddress($_ENV['MAIL_ADDRESS'], $_ENV['MAIL_NAME']);
        $this->isSMTP();
    }

    public function enviar($subject, $body)
    {

        $this->Subject = $subject;
        $this->Body = $body;

        return $this->send();
    }
}
