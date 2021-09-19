<?php
include('index.php');



function getKey($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomKey = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomKey .= $characters[$index];
    }
  
    return $randomKey;
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['btnEncypt'])){
    $message = $_POST['txtMsg'];
    $secret_key = getKey(10);
    $enc = Encryption($message,$secret_key);
    $email = $_POST['txtEmail'];


//sending emails 

require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'rehemabarhinjibanwa.rehema@gmail.com';                 // SMTP username
    $mail->Password = 'douce@1234';                            // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    $mail->SMTPOptions = array('ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true
)
);                                    // TCP port to connect to

    $subject = "Encryption";
    //$message2 = " \r\n the key is ".$secret_key;
    $message1 = $enc."\r\n The key is".$secret_key;  
 
    //Recipients
    $mail->setFrom($email);
    $mail->addAddress($email);     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message1;
    $mail->AltBody = $message1;

    $mail->send();

    header("location: alert.php");
    //echo 'Message has been sent';
    
}
catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

}

}




?>

