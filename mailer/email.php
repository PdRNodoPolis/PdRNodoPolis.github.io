
<?php
require_once './PHPMailerAutoload.php';

if ($_POST) {

$mail = new PHPMailer(); // create a new object
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "pdrnodopolis@gmail.com";
$mail->Password = "opinodromo";
$mail->SetFrom('pdrnodopolis@gmail.com', 'Opinodromo');
$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['body'];
$mail->AddAddress('pdrnodopolis@gmail.com', 'Opinodromo');

    $mail->send();
        
?>