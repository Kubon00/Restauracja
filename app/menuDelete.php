<?php
require('connect.php');

$id = $_REQUEST['id'];

    // Delete the reservation
    $delete_query = "DELETE FROM menu WHERE id=$id";
    $delete_result = mysqli_query($conn, $delete_query);

        // Redirect back to the reservations page or any other page
        header("Location: menuMaintance.php");
        exit();

?>
