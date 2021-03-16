<?php
session_start();
$firstName = "";
$message = "";
if (isset($_SESSION['first_name'])) {
    $firstName = $_SESSION['first_name'];
}
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    //  echo $message;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="heading">
        <h1>ONLINE EXAMINATION SYSTEM</h1>
        <div class="admin_login">
             <a href="./admin/adminlogin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>  Admin Login</a>            
        </div>
    </div>
    <div class="nav_bar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="exam.php">Take Exam</a></li>
            <li><a href="result.php">Results</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="login.php">

                    <?php
                    echo $message;
                    ?>

                </a></li>
        </ul>
    </div>
    <div class="image_background" style="margin: -4px 0;">
        <img src="image/pexels-christina-morillo-1181243.jpg" alt="">
        <div class="welcome_greeting">
            <h1>Dear <?php echo $firstName ?>,<br>Welcome To </br> Online Examination System</h1>
        </div>
    </div>
    <footer class="footer-page">
        <a href="#">Home</a>
        |
        <a href="#">Privacy Policy</a>

        <p class="rights">&copy;2021 All Rights Reserved</p>

    </footer>


</body>

</html>