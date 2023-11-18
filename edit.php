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
$id=$_REQUEST['id'];
$query = "SELECT * from rezerwacje where id='".$id."'"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
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
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$imie =$_REQUEST['imie'];
$email =$_REQUEST['email'];
$telefon =$_REQUEST['telefon'];
$dataa =$_REQUEST['dataa'];
$godzina =$_REQUEST['godzina'];
$goscie =$_REQUEST['goscie'];
$submittedby = $_SESSION["username"];
$update="UPDATE  rezerwacje SET imie='".$imie."', email='".$email."',telefon='".$telefon."',dataa='".$dataa."',godzina='".$godzina."',goscie='".$goscie."', Edytor='".$submittedby."' where id='".$id."'";
mysqli_query($conn, $update);
$status = "Dane zaktualizowane pomyślnie. </br></br>
<a href='reservations.php'>Zobacz zaktualizowane dane</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div class="form">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="imie" placeholder="Enter Name" 
required value="<?php echo $row['imie'];?>" /></p>
<p><input type="text" name="email" placeholder="Enter Age" 
required value="<?php echo $row['email'];?>" /></p>
<p><input type="text" name="telefon" placeholder="Enter Name" 
required value="<?php echo $row['telefon'];?>" /></p>
<p><input type="text" name="dataa" placeholder="Enter Name" 
required value="<?php echo $row['dataa'];?>" /></p>
<p><input type="text" name="godzina" placeholder="Enter Name" 
required value="<?php echo $row['godzina'];?>" /></p>
<p><input type="text" name="goscie" placeholder="Enter Name" 
required value="<?php echo $row['goscie'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
</div>
<?php } ?>
</body>
</html>
