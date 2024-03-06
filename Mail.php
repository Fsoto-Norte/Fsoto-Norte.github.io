<?php

include 'phpmailer/PHPMailer.php';

class Mail {
    
    public static function enviarCorreo($mails,$asunto,$mensaje){
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'mail.transportesnorte.cl';
        $mail->SMTPAuth = false;
        $mail->SMTPAutoTLS = false; 
        $mail->Port = 25; 
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->CharSet = 'UTF-8';
        $mail->Mailer = 'smtp';
        $mail->SMTPAuth = true;
        $mail->Username = 'contactenos@transportesnorte.cl';
        $mail->Password = 'Tnorte20222022';
        $mail->setFrom('contactenos@transportesnorte.cl', 'Transportes Norte');
        for($i = 0 ; $i < count($mails); $i++){
            $mail->addAddress($mails[$i], '');
        }
        $mail->Subject = $asunto;
        $mail->msgHTML($mensaje);
        if (!$mail->send()) {
        return "{\"mensaje\":" . "$mail->ErrorInfo}\"";
        } else {
            return "{\"mensaje\":\"ok\"}";
        }
    }
}
