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
    <title>Online Examination System</title>
</head>

<body>
    <div class="heading">
        <h1>ONLINE EXAMINATION SYSTEM</h1>
        <div class="dropdown">
            <span onclick="myFunction()" class="dropbtn"><i class="fa fa-user-circle-o fa-2x"></i></span>
            <div id="myDropdown" class="dropdown-content">
                <a>Signed in As</a>
                <a><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo $firstName ?></a>
                <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Help</a>
                <a><i class="fa fa-cogs" aria-hidden="true"></i> Setting</a>
                <a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
            </div>
        </div>
    </div>
    <div class="nav_bar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="exam.php">Take Exam</a></li>
            <li><a href="result.php">Results</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="about.php">About us</a></li>
        </ul>
    </div>
    <div class="image_background" style="margin: -4px 0;">
        <img src="image/pexels-christina-morillo-1181243.jpg" alt="">
        <div class="welcome_greeting">
            <h1>Dear <span style="color: indigo;"><?php echo $firstName ?></span>,<br>Welcome To </br> Online Examination System</h1>
        </div>
    </div>
    <footer class="footer-page">
        <a href="#">Home</a>
        |
        <a href="#">Privacy Policy</a>

        <p class="rights">&copy;2021 All Rights Reserved</p>

    </footer>


    <script>
        /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // // Close the dropdown if the user clicks outside of it
        // window.onclick = function(event) {
        //     if (!event.target.matches('.dropbtn')) {
        //         var dropdowns = document.getElementsByClassName("dropdown-content");
        //         var i;
        //         for (i = 0; i < dropdowns.length; i++) {
        //             var openDropdown = dropdowns[i];
        //             if (openDropdown.classList.contains('show')) {
        //                 openDropdown.classList.remove('show');
        //             }
        //         }
        //     }
        // }
    </script>


</body>

</html>