<?php

require('connect.php');

$pytania = new mysqli($host,$db_user,$db_password,$db_name);
extract($_POST);
$sql = "INSERT into pytania (imie,email,temat,wiadomosc) VALUES('" . $imie . "','" . $email . "','" . $temat . "','" . $wiadomosc . "')";
$success = $pytania->query($sql);
if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Dziękujemy za kontakt";


?>