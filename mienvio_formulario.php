<?php
$nombre_usuario=$_POST['nombre'];
$email_usuario=$_POST['correo'];
$consulta_usuario=$_POST['consulta'];
//creo 3 variables que se toman lo que se envia por POST en cada valor.
$destino="giovi_fiore@hotmail.com";

$asunto="conslta enviada desde www.xgiotv.com";

$mensaje="Nombre: ".$nombre_usuario."\r\n";
$mensaje.="Email: ".$email_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuario."\r\n";

$remitente="From: algo@giotv.com";

mail($destino, $asunto, $mensaje, $remitente);

header("Location:index.php?i=ok");
?>
