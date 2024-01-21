<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Zaloguj się</title>
<link rel="stylesheet" href="css/auth.css" />
</head>
<body>
<?php
require('connect.php');
include("auth.php");

$id = $_REQUEST['id'];

// Fetch the current reservation details
$query = "SELECT * FROM rezerwacje WHERE id='".$id."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Fetch the current stolik associated with the reservation
$fetch_stolik_query = "SELECT stolik FROM rezerwacje WHERE id='".$id."'";
$fetch_stolik_result = mysqli_query($conn, $fetch_stolik_query);
$current_stolik = mysqli_fetch_assoc($fetch_stolik_result)['stolik'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="auth/style.css" />
</head>
<body>
<div class="form">
    <h1>Edytuj Dane</h1>
    <?php
    $status = "";

    if(isset($_POST['new']) && $_POST['new'] == 1) {
        $id = $_REQUEST['id'];
        $imie = $_REQUEST['imie'];
        $email = $_REQUEST['email'];
        $telefon = $_REQUEST['telefon'];
        $dataa = $_REQUEST['dataa'];
        $godzina = $_REQUEST['godzina'];
        $goscie = $_REQUEST['goscie'];
        $stolik = $_REQUEST['stolik'];
        $submittedby = $_SESSION["username"];

        // Update the reservation details
        $update = "UPDATE rezerwacje SET imie='".$imie."', email='".$email."',telefon='".$telefon."',dataa='".$dataa."',godzina='".$godzina."',goscie='".$goscie."', stolik='".$stolik."', Edytor='".$submittedby."' WHERE id='".$id."'";
        mysqli_query($conn, $update);

        // If the stolik has changed, update the czy_zajety column in the stoliki table
        if ($stolik != $current_stolik) {
            $update_stolik_query = "UPDATE stoliki SET czy_zajety = 0 WHERE stolik = $current_stolik";
            mysqli_query($conn, $update_stolik_query);

            $update_new_stolik_query = "UPDATE stoliki SET czy_zajety = 1 WHERE stolik = $stolik";
            mysqli_query($conn, $update_new_stolik_query);
        }

        $status = "Dane zaktualizowane pomyślnie. </br></br>
        <a href='reservations.php'>Zobacz zaktualizowane dane</a>";
        echo '<p style="color:#FF0000;">'.$status.'</p>';
    } else {
    ?>
    <div class="form">
    <form name="form" method="post" action=""> 
        <input type="hidden" name="new" value="1" />
        <input name="id" type="hidden" value="<?php echo $row['id'];?>" />

        <!-- Other fields for id, email, telefon, dataa, godzina, and goscie -->
        <p><input type="text" name="imie" placeholder="Enter imie" required value="<?php echo $row['imie'];?>" /></p>
        <p><input type="text" name="email" placeholder="Enter Email" required value="<?php echo $row['email'];?>" /></p>
        <p><input type="text" name="telefon" placeholder="Enter Telefon" required value="<?php echo $row['telefon'];?>" /></p>
        <p><input type="text" name="dataa" placeholder="Enter Data" required value="<?php echo $row['dataa'];?>" /></p>
        <p><input type="text" name="godzina" placeholder="Enter Godzina" required value="<?php echo $row['godzina'];?>" /></p>
        <p><input type="text" name="goscie" placeholder="Enter Goście" required value="<?php echo $row['goscie'];?>" /></p>

        <p>
            <label for="stolik">Stolik:</label>
            <select name="stolik" required>
                <?php
                // Fetch available stoliki that are not reserved
                $stolik_query = "SELECT stolik FROM stoliki WHERE czy_zajety = 0";
                $stolik_result = mysqli_query($conn, $stolik_query);

                while ($stolik_row = mysqli_fetch_assoc($stolik_result)) {
                    $selected = ($stolik_row['stolik'] == $row['stolik']) ? "selected" : "";
                    echo "<option value='{$stolik_row['stolik']}' $selected>{$stolik_row['stolik']}</option>";
                }
                ?>
            </select>
        </p>
        
        <p><input name="submit" type="submit" value="Update" /></p>
    </form>
</div>
    <?php } ?>
</body>
</html>
