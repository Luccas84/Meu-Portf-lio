<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "luccaspereira84@gmail.com";
    $assunto = "Coleta de dados - Portifólio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: luccassouza1103@gmail.com"."\n"."reply-to: ".$email."\n"."X-mailer:PHP/".phpversion();


    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }

?>