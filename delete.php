<?php
require('connect.php');

$id = $_REQUEST['id'];

// Fetch the stolik associated with the reservation being deleted
$fetch_stolik_query = "SELECT stolik FROM rezerwacje WHERE id=$id";
$fetch_stolik_result = mysqli_query($conn, $fetch_stolik_query);

if ($fetch_stolik_result && $row = mysqli_fetch_assoc($fetch_stolik_result)) {
    $stolik = $row['stolik'];

    // Delete the reservation
    $delete_query = "DELETE FROM rezerwacje WHERE id=$id";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        // Update the czy_zajety column in the stoliki table
        $update_stolik_query = "UPDATE stoliki SET czy_zajety = 0 WHERE stolik = $stolik";
        mysqli_query($conn, $update_stolik_query);

        // Redirect back to the reservations page or any other page
        header("Location: reservations.php");
        exit();
    } else {
        // Handle the case where the deletion fails
        echo "Error deleting reservation.";
    }
} else {
    // Handle the case where the stolik is not found
    echo "Error fetching stolik information.";
}
?>
