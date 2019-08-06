<?php
////---------------------------HOW TO DISPLAY ALL ERRORS-------------------------------------
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

//refresh every 6 seconds to index.html
// header ("refresh:6; url=index.html");

include ("config.php");

//implement PHPMailer-----------------------------------------------------------------------
use PHPMailer\PHPMailer\PHPMailer;
require './vendor/autoload.php';

//Declare variables from contact form HTML---------------------------------------------------
$first_name = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
$last_name = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
$age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['contact'], FILTER_SANITIZE_STRING);

$errors = array();

//set requirements for valid entries in each field--------------------------------------------
if (!preg_match("/^([a-zA-Z' ]+)$/", $first_name)) {
    $errors['firstName'] = nl2br ("The name is an invalid value." . "\n<br");
}

if (!preg_match("/^([a-zA-Z' ]+)$/", $last_name)) {
    $errors['lastName'] = nl2br ("The last name is an invalid value." . "\n<br");
}

if (!preg_match("/^[1-9][0-9]*$/", $age)) {
    $errors['age'] = nl2br ( "The age is invalid." . "\n<br");
}

if (empty($message)) {
    $errors['contact'] = nl2br ("Please fill in a message." . "\n<br");
}

//------------------- to configure a PHPMail request using Mailtrap-----------------------

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = $user;
$mail->Password = $pass;
$mail->SMTPSecure = 'tls';
$mail->Port = 25;

$mail->setFrom('phpcontactform@example.com', $first_name . ' ' . $last_name);
$mail->addAddress('success@example.com', 'Allison Van Linden');
$mail->Subject = 'PHPMailer SMTP test';
$mail->isHTML(true);
$mail->Body = $message;


//---------------------------failsafe if the message is sent or not------------------------
if (!preg_match("^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$")) {
    if(!$mail->send()){ 
        $errors['email'] = nl2br ("The email address is invalid." . "\n<br");
        echo nl2br ("Message could not be sent." . "\n<br");
        echo nl2br ("MAILER ERROR: " . $mail->ErrorInfo . "\n<br");
    } else {
        echo 'Your message has been sent. Thank you!';
    }
}

if (count($errors) > 0) {
    echo "Sorry, there's an error: " . "\n<br";
    print_r($errors);
    exit;
}


?>