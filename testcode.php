<?php
$msg = "";

use PHPMailer\PHPMailer\PHPMailer;

include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";
// include_once "PHPMailer/SMTP.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer();

    $mail->Host = "smtp.gmail.com";
    // $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "mail;
    $mail->Password = "pass_word";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465; //587


    $mail->addAddress('myapplemusic0822@gmail.com');
    $mail->setFrom($email);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;

    if ($mail->send())
        $msg = "Your email has been sent, i will get back to you shortly";
    else
        echo $mail->ErrorInfo;
}
