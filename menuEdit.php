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
$query = "SELECT * FROM menu WHERE id='".$id."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Fetch the current stolik associated with the reservation
$fetch_stolik_query = "SELECT stolik FROM rezerwacje WHERE id='".$id."'";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="auth/style.css" />
</head>
<body>
<div class="form">
    <h1>Edytuj Menu</h1>
    <?php
    $status = "";

    if(isset($_POST['new']) && $_POST['new'] == 1) {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $ingredients = $_REQUEST['ingredients'];
        $price = $_REQUEST['price'];
        $category = $_REQUEST['category'];
        $image = $_REQUEST['image'];
        $submittedby = $_SESSION["username"];

        // Update the reservation details
        $update = "UPDATE menu SET name='".$name."', ingredients='".$ingredients."',price='".$price."',category='".$category."',image='".$image."', Edytor='".$submittedby."' WHERE id='".$id."'";
        mysqli_query($conn, $update);

        $status = "Dane zaktualizowane pomyślnie. </br></br>
        <a href='menuMaintance.php'>Zobacz zaktualizowane dane</a>";
        echo '<p style="color:#FF0000;">'.$status.'</p>';
    } else {
    ?>
    <div class="form">
    <form name="form" method="post" action=""> 
        <input type="hidden" name="new" value="1" />
        <input name="id" type="hidden" value="<?php echo $row['id'];?>" />

        <!-- Other fields for id, email, telefon, dataa, godzina, and goscie -->
        <p><input type="text" name="name" placeholder="Enter name" required value="<?php echo $row['name'];?>" /></p>
        <p><input type="text" name="ingredients" placeholder="Enter ingredients" required value="<?php echo $row['ingredients'];?>" /></p>
        <p><input type="text" name="price" placeholder="Enter price" required value="<?php echo $row['price'];?>" /></p>
        <p><input type="text" name="category" placeholder="Enter category" required value="<?php echo $row['category'];?>" /></p>
        <p><input type="text" name="image" placeholder="Enter image" required value="<?php echo $row['image'];?>" /></p>
        <p><input name="submit" type="submit" value="Update" /></p>
    </form>
</div>
    <?php } ?>
</body>
</html>
