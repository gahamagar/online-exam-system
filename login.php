<?php
require_once "connection.php";
session_start();
$message="";
if(isset($_SESSION['message'])){
    $message=$_SESSION['message'];
unset($_SESSION['message']);

}
// echo $_SESSION['message'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">
<title>Login</title>
</head>
<body>
    <div class="main_heading">
        <h1>ONLINE EXAMINATION SYSTEM</h1>
    </div>
    <center>
<form class="form_box" action="loginprocess.php" method="POST">
    <div class="heading">
        <h1>LOGIN</h1>
    </div>
<input type="email" name="email" class="form-element-login" placeholder="Email" required=''>
<input type="password" name="password" class="form-element-login" placeholder="Password" required=''>
<label class="error_message">
    <?php
echo $message;
?>
</label>
<button type="submit" class="form-element-login">Login</button>
<div class="line-break"></div>
<div class="create">
<a href="register.php">Register Your Name </a>
</div>
</form>
</center>
</body>
</html>



