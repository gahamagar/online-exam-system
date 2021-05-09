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
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="main_heading">
        <h1>ONLINE EAMINATION SYSTEM</h1>
    </div>
    <center>
    <form  action="registerprocess.php" method="post"class="form_box_register">
        <div class="heading">
            <h1>
                Registration
            </h1>
        </div>
        <input type="name" class="form-element" name="first_name" placeholder="First Name" required=''>
        <input type="name"class="form-element" name="last_name" placeholder="Last Name" required=''>
        <input type="name"class="form-element"name="mobile" placeholder="Mobile Number" maxlength="10" minlength="10" required=''>
        <input type="name"class="form-element"name="address" placeholder="Address" required=''>
        <input type="name" class="form-element" name="email" placeholder="Email" required=''>
        <input type="password"class="form-element"name="password" placeholder="Password" required=''>
        <span class="form-element"><input type="checkbox">I agreed with your <a href="#">Terms & Conditions</a></span>
        <button type="submit" class="form-element">Register</button>                                                                                                               
        <p>Already have an account?<a href="login.php">Login</a></p>
    </form>
</center>
</body>
</html>