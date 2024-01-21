<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Autoload dla PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendEmail($imie, $email, $telefon, $newdate, $godzina, $goscie, $Nr_stolika)
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.poczta.onet.pl';
        $mail->SMTPAuth = true;
        $mail->Username = 'hogward-legacy@op.pl';
        $mail->Password = 'Sznycelx2@';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->isHTML(true);

        $mail->setFrom('hogward-legacy@op.pl', "Pizzeria Oregano"); // Nadawca
        $mail->addAddress($email);  // Odbiorca

        $mail->Subject = 'Potwierdzenie rezerwacji';
        $mail->Body = 'test';

        $mail->send();
        echo 'Wiadomość została wysłana.';
    } catch (Exception $e) {
        echo 'Błąd: ', $e->getMessage();
    }
}

?>