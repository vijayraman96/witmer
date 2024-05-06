<?php

require "../../PHPMailer/src/PHPMailer.php";
require "../../PHPMailer/src/SMTP.php";
require "../../PHPMailer/src/Exception.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// require 'vendor/autoload.php'; // Include PHPMailer autoloader

// Check if data is posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $linkedin = $_POST['linkedin'];
    $education =$_POST['education']
    $role =$_POST['role']
    $joining =$_POST['joining'];
    $radio = $_POST['exampleRadios'];
    $experience =$_POST['experience'];
    $ctc =$_POST['ctc'];

    // Create a PHPMailer instance
    $mail = new PHPMailer();

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com';  // Specify SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'vijayadaran@gmail.com'; // SMTP username
        $mail->Password = 'EmilyPotter@96';   // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom($email, $name); // Sender's email address and name
        $mail->addAddress('vijayadaran@gmail.com'); // Recipient's email address

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'New message from contact form';
        $mail->Body    = "Name: $name <br>Email: $email <br>Message: $message";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>