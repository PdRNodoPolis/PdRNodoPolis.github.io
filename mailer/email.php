
<?php

// Pear Mail Library
require_once "./Mail-1.4.1/Mail.php";

$from = '<pdrnodopolis@gmail.com>';
$to = '<pdrnodopolis@gmail.com>';
$subject = $_POST['subject'];
$body = $_POST['body'];

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'pdrnodopolis@gmail.com',
        'password' => 'opinodromo'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}