<?php
require('connect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM rezerwacje WHERE id=$id"; 
$result = mysqli_query($conn,$query);
header("Location: reservations.php"); 
?>