<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$destinatario = 'camiloromero1426@gmail.com';
$mensajeCompleto = "Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
mail($destinatario, $asunto, $mensajeCompleto);
header('Location: contacto.html');
?>
