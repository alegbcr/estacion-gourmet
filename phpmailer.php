<?php 
include('keys.php');
require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

// variables
$token = $_POST['token'];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$numberPeople = $_POST["numberPeople"];
$place = $_POST["place"];
$date = $_POST["date"];
$specialRequest = $_POST["message"];

$body = <<<HTML
    <h1>Información de cotización</h1>
    <p>De: $name  </p>
    <p>Teléfono: $phone</p>
    <p>Email de contacto: $email</p>
    <p>Número de personas: $numberPeople</p>
    <p>Lugar: $place</p>
    <p>Fecha: $date</p>
    <p>Requerimiento especial: $specialRequest</p>
HTML;

$url = 'https://www.google.com/recaptcha/api/siteverify';
$petition = "$url?secret=$keys[secret]&response=$token";

$answer = file_get_contents($petition);
$json = json_decode($answer, true);
$ok = $json['success'];

if($ok === false){
    header('Location: index.html');
    die();
}

if($json['score'] < 0.7){
    header('Location: index.html?No, tiene acceso los robots');
    die();
}

if($ok === true && $json['score'] >= 0.7){
    $mailer = new PHPMailer();
    $mailer->setFrom( $email, "$name");
    $mailer->addAddress('alegonzb@gmail.com', 'Landing Page');
    $mailer->Subject = "Nueva cotización de $name";
    $mailer->msgHTML($body);
    $mailer->AltBody = strip_tags($body);
    $rta = $mailer->send();
    // var_dump($rta);
    header('Location: index.html');
    // die();
}

?>