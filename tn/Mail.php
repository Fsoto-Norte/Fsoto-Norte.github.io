<?php

include 'phpmailer/PHPMailer.php';

class Mail {
    
    public static function enviarCorreo($asunto,$mensaje){
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host = "mail.easyfactura.cl";
        $mail->SMTPSecure = 'ssl';    
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 2;
        $mail->Username = "servicioextmarketing@easyfactura.cl";
        $mail->Password = "Marketing.2023";
        $mail->setFrom("servicioextmarketing@easyfactura.cl", 'Has recibido un nuevo mensaje desde el formulario web');
        $mail->addAddress("jmprieto@transportesnorte.cl");
        $mail->Subject = $asunto;
        $mail->msgHTML($mensaje);
        if (!$mail->send()) {
            return false;
        } else {
            return true;
        }
    }
    
}
