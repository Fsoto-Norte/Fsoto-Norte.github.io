<?php

include './Mail.php';

echo "dsd";
$asunto = "";
$mensaje = "";
$texto = filter_input(INPUT_GET, "texto");
echo "sad";
echo "texto: ".$texto;

$asunto = "Formulario de contacto";
$mensaje = $texto;
$array = array();
$asunto = "Has recibido un nuevo mensaje desde formulario RRSS. ¡Puede ser un nuevo cliente!";
$resp = Mail::enviarCorreo($asunto, $mensaje);
echo $resp;

