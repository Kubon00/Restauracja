<?php
require('connect.php');

$conn = new mysqli($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Funkcja do pobierania i wyświetlania menu
function displayMenu($category)
{
    global $conn;

    $sql = "SELECT * FROM menu WHERE category = '$category'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="menu-item">';
            echo '<div class="menu-text">';
            echo '<h3><span>' . $row['name'] . '</span> <strong>' . $row['price'] . ' zł</strong></h3>';
            echo '<p>' . $row['ingredients'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'Brak danych w kategorii ' . $category;
    }
}

?>
