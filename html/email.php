<?php

if(isset($_POST['email']) && !empty($_POS['email'])){

$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "misa2546@gmail.com";
$subject = "Contato - CODE DATE";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:contato@codedate.com". "\r\n"
          ."Reply-to:".$email. "\r\n"
          ."X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){
	echo("E-mail enviado com sucesso!");
}else{
	echo("E-mail não pode ser enviado!");
}

}
?>