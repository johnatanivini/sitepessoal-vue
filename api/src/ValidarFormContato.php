<?php

namespace Api;

use Psr\Http\Message\ServerRequestInterface;

class ValidarFormContato
{

    private $atributos;
    private $error = [];

    public function __construct(ServerRequestInterface $request)
    {
        $this->atributos = (object) $request->getParsedBody();
    }


    public function validar()
    {

        $name = trim(stripslashes($this->atributos->contactName));
        $email = trim(stripslashes($this->atributos->contactEmail));
        $subject = trim(stripslashes($this->atributos->contactSubject));
        $contact_message = trim(stripslashes($this->atributos->contactMessage));
        $contact_captcha = intval(trim(stripslashes($this->atributos->contactCaptcha)));
       
        $valorCaptcha = (int) $this->atributos->numero1 + (int) $this->atributos->numero2;

        var_dump($subject == '',$subject);

        // Check Name
        if (strlen($name) == '') {
            $this->error['name'] = "Por favor, coloque seu nome";
        }
        // Check Email
        if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
            $this->error['email'] = "Por favor, entre com um email válido.";
        }
        // Check Message
        if ($contact_message =='') {
            $this->error['message'] = "Por favor entre com seu comentário";
        }
        // Subject
        if ($subject == '') {
            $this->atributos->contactSubject = "Formulario de Contato";
        }

        //Check Capcha
        if ($contact_captcha != ($valorCaptcha)) {
            $this->error['contact_captcha'] = "O valor do captcha está errado! Coloque o valor correto.";
        }
    }

    public function isValid(){
        return count($this->error) === 0;
    }

    public function getErros(){
        return $this->error;
    }

    public function getAtributos(){
        return $this->atributos;
    }
}
