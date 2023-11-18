<?php

require('connect.php');
require('send.php');
$rezerwacje = new mysqli($host,$db_user,$db_password,$db_name);
extract($_POST);
$newdate= date("Y-m-d",strtotime($dataa));
$sql = "INSERT into rezerwacje (imie,email,telefon,dataa,godzina,goscie) VALUES('" . $imie . "','" . $email . "','" . $telefon . "','" . $newdate . "','" . $godzina . "','" . $goscie . "')";
$success = $rezerwacje->query($sql);
send_whatsapp("Dodano rezerwację 
Imie: $imie,
Email: $email, 
Telefon: $telefon, 
Data:$newdate,
Godzina:$godzina,
Goście:$goscie",); 
if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}
header("Location: thx.html");



?>