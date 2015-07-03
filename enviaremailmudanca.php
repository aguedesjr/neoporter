<?php
  //Definicoes globais
  $para = "sistema@neoporter.com.br";

  $condominio = $_POST['condominio'];
  $apto = $_POST['apto'];
  $nome = $_POST['author'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $data = $_POST['data'];
  $hora = $_POST['hora'];
  $tempo = $_POST['tempo'];
  $transp = $_POST['transp'];
  $teltransp = $_POST['teltransp'];
  $assunto = "Informação de Mudança";
  
  
  //Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>Tel: </strong>".$_POST['tel'];
  $mensagem .= "<br>  <strong>E-mail: </strong>".$_POST['email'];
  $mensagem .= "<br>  <strong>Condominio: </strong>".$_POST['condominio'];
  $mensagem .= "<br>  <strong>Apartamento: </strong>".$_POST['apto'];
  $mensagem .= "<br>  <strong>Data: </strong>".$_POST['data'];
  $mensagem .= "<br>  <strong>Hora: </strong>".$_POST['hora'];
  $mensagem .= "<br>  <strong>Tempo Previsto: </strong>".$_POST['tempo'];
  $mensagem .= "<br>  <strong>Transportadora: </strong>".$_POST['transp'];
  $mensagem .= "<br>  <strong>Telefone da Transportadora: </strong>".$_POST['obs'];

  //Agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  Sistema Neoporter<sistema@neoporter.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <sistema@neoporter.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <sistema@neoporter.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
header("location:mudancas.php");
?>