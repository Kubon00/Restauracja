<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "restauracja";
$conn = mysqli_connect($host, $db_user, $db_password, $db_name) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
