<?php
include 'Mail.php';

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$descripcion = $_POST['descripcion'];

//client
$mails = array();
array_push($mails, $correo);
$asunto = "Transportes Norte - Recebemos Seu Pedido";
$mensaje = "¡Oi!<br> Recebemos sua solicitação e entraremos em contato o mais breve possível. <br> Muito obrigado por escolher a Transportes Norte.";
echo Mail::enviarCorreo($mails, $asunto, $mensaje);


//mason
$mails2 = array();
array_push($mails2, "contactenos@transportesnorte.cl");
array_push($mails2, "jcurinao@transportesnorte.cl");
array_push($mails2, "jmprieto@transportesnorte.cl");
$asunto2 = "Nuevo Mensaje desde Formulario Web";//asunto para el mason
$mensaje2 = "Nombre: $nombre<br> Telefono: $telefono<br> Correo: $correo<br> Descripción: $descripcion<br>";//aqui9 coloca los datos en gormato html puede ser
echo Mail::enviarCorreo($mails2, $asunto2, $mensaje2);
