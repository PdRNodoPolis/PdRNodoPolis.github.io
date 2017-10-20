
<?php
require_once 'PHPMailerAutoload.php';


if (isset($_POST) {

$mail = new PHPMailer(); // create a new object
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "pdrnodopolis";
$mail->Password = "opinodromo";
$mail->SetFrom('pdrnodopolis@gmail.com', 'Opinodromo');
$mail->Subject = '[Opinodromo PdR] ' . $_POST['subject'];
$mail->Body = $_POST['body'];
$mail->AddAddress('pdrnodopolis@gmail.com');


 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }> false, 'message' => 'Please fill out the form completely.');
    echo json_encode($data);

}
