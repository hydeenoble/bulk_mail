<?php
/**
 * Created by PhpStorm.
 * User: hydee
 * Date: 9/22/50
 * Time: 2:47 AM
 */

require_once("phpmailer/class.phpmailer.php");

$mail = new PHPMailer();

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

        $mail->setFrom("hydeenoble39@gmail.com", $sendername);
        $mail->Subject = $subject;
        $mail->Body = $body;

        $recipients = explode(";",$str_recipients);


        for($i = 0; $i < count($recipients); $i++){
            $recipient = $recipients[$i];
            $mail->addAddress($recipient);
            $mail->send();
        }

    }
}

