<?php
require_once('PHPMailer-5.2-stable/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'michadegeofroy@gmail.com';
$mail->Password = 'Formentera2016';
$mail->SetFrom('michadegeofroy@gmail.com');
$mail->Subject = 'Hello World';
$mail->Body = 'A test email';
$mail->AddAddress('michadegeofroy@gmail.com');

$mail->Send();

?>