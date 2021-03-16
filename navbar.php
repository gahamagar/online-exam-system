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
            <ul>
            <li><a href="./admin/adminlogin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>  Admin Login</a></li>
            </ul>
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
</body>
</html>