<?php

  // Assunto do e-mail
  $assunto = "Contato do site";
  //QUEM ENVIA O EMAIL / QUEM RECEEBE
  $para =  "contato@editorarmultimidia.com.br";

  //Dados do destinatário RECEBIDOS VIA POST
	$nome = $_POST["nome"];
	$email = $_POST["mail"];
	$telefone = $_POST["telefone"];
  $assunto  = $_POST['assunto'];
  $mensagem  = $_POST['mensagem'];
	$Data = date("d/m/Y");



//O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
//O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: $para  \n"; //Remetente
$headers .= "Return-Path: ".$email."\n"; //Return-path

//Corpo do e-mail pode ser HTML ou TXT
$Corpo ="
<html>
<head>
  <meta charset='UTF-8'>
  <title>Document</title>
  <style>
  .{margin:0; padding:0;}
  #container{
    width: 600px;
    background:#E4E4E4;
    margin:0 auto;
  }
  #container table tr td{

    border-bottom: 1px solid #ccc;
  }
  #tabela{
     width:600px;
     box-shadow: 1px 1px 50px rgba(0,0,0,5);
  }
  </style>
</head>
<body>
  <div id='container'>
    <table id='tabela' align='center'>
      <tr>
        <td align='center'><img src='http://editorarmultimidia.com.br/images/editorar_368x238.png' height='138' width='238'></td>
      </tr>
      <tr>
        <td>Contato recebido de Editorarmultimidia.com.br</td>


      </tr>
      <tr>
        <td><strong>Nome:$nome</strong></td>
      </tr>
      <tr>
        <td><strong>Telefone:$telefone</strong></td>
      </tr>
      <tr>
        <td><strong>E-mail:$email</strong></td>
      </tr>

      <tr>
        <td><strong>Assunto:$assunto</strong></td>
      </tr>
      <tr>
        <td><strong>Mensagem:</strong></td>
      </tr>
      <tr>
        <td>$mensagem</td>
      </tr>
      <tr>
        <td>Enviado:$Data</td>
      </tr>
    </table>
  </div>
</body>
</html>
";

//Função para envio do e-mail para o destinatário
mail($para, $assunto , "$Corpo", $headers,"-r"."".$para);


echo "<script>alert('".$nome." Obrigado pelo seu contato.')</script>";
echo "<script>document.location.href=('http://editorarmultimidia.com.br/#contato')</script>";
?>