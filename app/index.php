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
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($conn,$query);
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: main.php");
		send_whatsapp("Użytkownik $username zalogował się na stronę");
         }else{
	echo "<div class='form'>
<h3>Nazwa lub hasło jest niepoprawne.</h3>
<br/>Kliknij tutaj <a href='index.php'>Zaloguj</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Zaloguj się</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Nazwa" required />
<input type="password" name="password" placeholder="Hasło" required />
<input name="submit" type="submit" value="Zaloguj" />
</form>
<p>Nie zarejestrowany? <a href='rejestracja.php'>Zarejestruj się tutaj</a></p>
</div>
<?php } ?>
</body>
</html>