<?php

header('Content-Type: application/json');
    
$asunto = "";
$mensaje = "";
$texto = filter_input(INPUT_GET, "texto");


$mensaje = urlencode($texto);

$url = "https://www.easyfactura.cl/tn/enviarCorreo2.php?texto=".$mensaje;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
$return = curl_exec($ch);
curl_close($ch);
$res = $return;

echo $res ;

