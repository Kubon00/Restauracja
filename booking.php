<?php
// booking_process.php

require('connect.php');
require('send.php');
require('send_email.php');

$rezerwacje = new mysqli($host, $db_user, $db_password, $db_name);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    $newdate = date("Y-m-d", strtotime($dataa));

    // Pobierz informację, czy stolik jest zajęty
    $queryCzyZajety = "SELECT czy_zajety FROM stoliki WHERE stolik = '$Nr_stolika'";
    $resultCzyZajety = $rezerwacje->query($queryCzyZajety);

    if ($resultCzyZajety->num_rows > 0) {
        $rowCzyZajety = $resultCzyZajety->fetch_assoc();
        $czyZajety = $rowCzyZajety['czy_zajety'];

        // Jeśli stolik jest zajęty, obsłuż odpowiednio
        if ($czyZajety) {
            echo "Stolik jest już zajęty. Proszę wybrać inny stolik.";
            // Tutaj możesz dodać odpowiednią obsługę zajętego stolika
        } else {
            // Stolik jest wolny, wykonaj rezerwację

            $sql = "INSERT INTO rezerwacje (imie, email, telefon, dataa, godzina, goscie, stolik) VALUES ('$imie', '$email', '$telefon', '$newdate', '$godzina', '$goscie', '$Nr_stolika')";
            $success = $rezerwacje->query($sql);

            if (!$success) {
                die("Couldn't enter data: " . $mysqli->error);
            }

            // Zaktualizuj informację o zajętości stolika
            $sqlZarezerwujStolik = "UPDATE stoliki SET czy_zajety = 1 WHERE stolik = '$Nr_stolika'";
            $rezerwacje->query($sqlZarezerwujStolik);

            send_whatsapp("Dodano rezerwację 
            Imie: $imie,
            Email: $email, 
            Telefon: $telefon, 
            Data: $newdate,
            Godzina: $godzina,
            Goście: $goscie,
            Stolik: $Nr_stolika");

            sendEmail($imie, $email, $telefon, $newdate, $godzina, $goscie, $Nr_stolika);

            header("Location: thx.html");
        }
    } else {
        echo "Nie znaleziono informacji o stoliku.";
        // Tutaj możesz dodać odpowiednią obsługę braku informacji o stoliku
    }
}
?>
