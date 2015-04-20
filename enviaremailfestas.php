<?php
  //Definicoes globais
  $para = "neoporter@neoporter.com.br";

  $condominio = $_POST['condominio'];
  $apto = $_POST['apto'];
  $nome = $_POST['author'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $data = $_POST['data'];
  $hora = $_POST['hora'];
  $nconv = $_POST['nconv'];
  $listagem = $_POST['text'];
  $obs = $_POST['obs'];
  $assunto = "Informação de Festa";
  
  
  //Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>Tel: </strong>".$_POST['tel'];
  $mensagem .= "<br>  <strong>E-mail: </strong>".$_POST['email'];
  $mensagem .= "<br>  <strong>Condominio: </strong>".$_POST['condominio'];
  $mensagem .= "<br>  <strong>Apartamento: </strong>".$_POST['apto'];
  $mensagem .= "<br>  <strong>Data: </strong>".$_POST['data'];
  $mensagem .= "<br>  <strong>Hora: </strong>".$_POST['hora'];
  $mensagem .= "<br>  <strong>Nº Convidados: </strong>".$_POST['nconv'];
  $mensagem .= "<br>  <strong>Observação: </strong>".$_POST['obs'];
  $mensagem .= "<br>  <strong>Listagem: </strong>".$_POST['text'];

  //Agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  Sistema Neoporter<sistema@neoporter.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <sistema@neoporter.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <sistema@neoporter.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
header("location:festas.php");
?>