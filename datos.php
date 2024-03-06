<?php
include 'Mail.php';

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$descripcion = $_POST['descripcion'];

//client
$mails = array();
array_push($mails, $correo);
$asunto = "Transportes Norte - Recibimos su solicitud";
$mensaje = "Hemos recibido su solicitud y nos pondremos en contacto contigo lo antes posible.. <br> Muchas gracias por elegir a Transportes Norte.";
echo Mail::enviarCorreo($mails, $asunto, $mensaje);


//Personal de Transportes Norte
$mails2 = array();
array_push($mails2, "contactenos@transportesnorte.cl");
array_push($mails2, "jcurinao@transportesnorte.cl");
array_push($mails2, "jmprieto@transportesnorte.cl");
array_push($mails2, "pipeharris@gmail.com");
$asunto2 = "Nuevo Mensaje desde Formulario Web";//asunto para personal de TP
$mensaje2 = "Nombre: $nombre<br> Telefono: $telefono<br> Correo: $correo<br> Descripción: $descripcion<br>";//aqui9 coloca los datos en gormato html puede ser
echo Mail::enviarCorreo($mails2, $asunto2, $mensaje2);
