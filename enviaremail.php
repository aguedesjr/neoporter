<?php
  //1 – Definimos Para quem vai ser enviado o email
  $para = "vendas@scout24horas.com.br";
  //$para = "neoporte@neoporter.com.br";
  //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
  $nome = $_POST['author'];
  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $assunto = $_POST['subject'];
  //4 - resgatar endereco
  $endereco = $_POST['endereco'];
  //5 - resgatar telefone
  $tel = $_POST['tel'];
  //6 - resgatar email
  $email = $_POST['email'];
  //7 - resgatar condominio
  $condominio = $_POST['condominio'];
  //8 - resgatar sindico
  $sindico = $_POST['sindico'];
  
  
   //9 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>E-mail: </strong>".$_POST['email'];
  $mensagem .= "<br>  <strong>Endereço: </strong>".$_POST['endereco'];
  $mensagem .= "<br>  <strong>Tel: </strong>".$_POST['tel'];
  $mensagem .= "<br>  <strong>Condominio: </strong>".$_POST['condominio'];
  $mensagem .= "<br>  <strong>Síndico: </strong>".$_POST['sindico'];
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['text'];

//10 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  Sistema Neoporter<sistema@neoporter.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <sistema@neoporter.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <sistema@neoporter.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
header("location:contato.php");
?>