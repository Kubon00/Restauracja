<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Logowanie</title>
<link rel="stylesheet" href="css/auth.css" />
</head>
<body>
<?php
require('connect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username']) && isset($_REQUEST['password'])){
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn,$username); 
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn,$password);

    $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
    $rows = mysqli_num_rows($result);
    if($rows==1){
        echo "<div class='form'>
            <h3>You are logged in successfully.</h3>
            <br/>Click here to <a href='index.php'>Dashboard</a></div>";
    }else{
        echo "<div class='form'>
            <h3>Invalid username/password. Please try again.</h3>
            <br/>Click here to <a href='index.php'>Login</a></div>";
    }
}else{
?>
<div class="form">
    <h1>Logowanie</h1>
    <form name="login" action="" method="post">
        <input type="text" name="username" placeholder="Nazwa" required />
        <input type="password" name="password" placeholder="Hasło" required />
        <input type="submit" name="submit" value="Zaloguj" />
    </form>
</div>
<?php } ?>
</body>
</html>
