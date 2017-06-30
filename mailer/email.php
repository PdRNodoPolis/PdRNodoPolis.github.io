
<?php
require_once 'PHPMailerAutoload.php';


if (isset($_POST) {

$mail = new PHPMailer(); // create a new object
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "pdrnodopolis";
$mail->Password = "opinodromo";
$mail->SetFrom('pdrnodopolis@gmail.com', 'Opinodromo');
$mail->Subject = '[Opinodromo PdR] ' . $_POST['subject'];
$mail->Body = $_POST['body'];
$mail->AddAddress('pdrnodopolis@gmail.com');


    if(!$mail->send()) {
        $data = array('success' => false, 'message' => 'El mensaje no ha sido enviado, por favor inténtelo de nuevo.');
        echo json_encode($data);
        exit;
    }

    $data = array('success' => true, 'message' => 'El mensaje fue enviado exitosamente.');
    echo json_encode($data);

} else {

    $data = array('success' => false, 'message' => 'Please fill out the form completely.');
    echo json_encode($data);

}
