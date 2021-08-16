<?php
$para = 'jeffersonvillota@gmail.com';
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$fecha = $_POST['fecha'];
$servicio=$_POST['servicio'];
$telefono=$_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header ="Enviado desde mi pagina web";
$mensajecompleto= $mensaje . "\nAtentamente: " . $nombre ."\nTelefono: " . $telefono . "\nFecha: " . $fecha;
mail($para, $servicio, $mensajecompleto, $header);
echo"<script>alert('correo enviado exitosamente')</script>";
echo"<script> setTimeout(\"location.href='index.html'\",1000)</script>"
?>
