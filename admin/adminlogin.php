<?php
require_once "../connection.php";
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
<link rel="stylesheet" href="../style.css">
<title>Admin Login</title>
</head>
<body>
    <div class="main_heading">
        <h1>ONLINE EAMINATION SYSTEM</h1>
    </div>
    <center>
<form class="form_box" action="adminloginprocess.php" method="POST">
    <div class="heading">
        <h1>
            ADMIN LOGIN
        </h1>
    </div>
<input type="name" name="email" class="form-element-login" placeholder="Email" required=''>
<input type="password" name="password" class="form-element-login" placeholder="Password" required=''>
<label class="error_message">
    <?php
echo $message;
?>
</label>
<button type="submit" class="form-element-login">Login</button>

</form>
</center>
</body>
</html>
