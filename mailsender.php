<?php
/**
 * Created by PhpStorm.
 * User: hydee
 * Date: 9/22/50
 * Time: 2:47 AM
 */

require_once("phpmailer/class.phpmailer.php");

$mail = new PHPMailer();
//$mail->isSMTP();
//$mail->SMTPSecure = 'tls';

if(isset($_POST['send'])){

    //var_dump($_POST);
    if (!empty($_POST['sender_name']) AND !empty($_POST['subject']) AND !empty($_POST['recipients']) AND !empty($_POST['body'])) {

        //echo "here";
        $recipients = array();
        $recipient= "";

        $sendername = $_POST['sender_name'];
        $subject = $_POST['subject'];
        $str_recipients = $_POST['recipients'];
        $body = $_POST['body'];

        $mail->setFrom("hydeenoble@stunafrica.com.ng", $sendername);
        $mail->Subject = $subject;
        $mail->Body = $body;

        $recipients = explode(";",$str_recipients);


        foreach ($recipients as $recipient){
            $mail->addAddress($recipient);
        }


        
    }

    $mail->send();
}

