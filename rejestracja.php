<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Rejestracja</title>
<link rel="stylesheet" href="css/auth.css" />
</head>
<body>
<?php
require('connect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Rejestracja</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Nazwa" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Hasło" required />
<input type="submit" name="submit" value="Zarejestruj" />
</form>
</div>
<?php } ?>
</body>
</html>