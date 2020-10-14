<?php

   sleep(2);
   
   
   $arquivo = file_get_contents('cadastro.txt');
   
   $palavra = $_POST['email'];
   
   $abre = fopen('cadastro.txt','a+');
   
   $conteudo = $_POST['email'];
   
   fwrite($abre,$conteudo.",");
   
   fclose($abre);
   
   
   $mensagens = "Nome:".$_POST['nome']."<br/>
                 Email:".$_POST['email']."
                 Email:".$_POST['nome_bebe']."
                 Email:".$_POST['data_nasc']."
                 Email:".$_POST['cidade']."
                 Email:".$_POST['estado']."
                ";
   
   mail('johnatan.ivini@gmail.com','[cadastro papika]',$mensagens,'From:johnatan.ivini@gmail.com');
   
   echo "cadastrado com sucesso";
   
?>