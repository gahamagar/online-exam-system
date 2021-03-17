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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Online Examination System|About Us</title>
</head>

<body>
    <div class="heading">
        <h1>ONLINE EXAMINATION SYSTEM</h1>
        <?php  include 'userprofile.php' ?>
    </div>
    <div class="nav_bar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="exam.php">Enroll Exam</a></li>
            <li><a href="result.php">Results</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="#">

                    <?php
                    echo $message;
                    ?>

                </a></li>
        </ul>
    </div>
    <!-- <div class="image_background" style="margin: -4px 0;">
        <img src="image/pexels-christina-morillo-1181243.jpg" alt="">
    </div> -->

    <!-- just check -->
    <div class="main_box">
<div class="form_box_about">

<h1>What is Online Examination System?</h1>
<p>Online Examination System is a technology-driven way to simplify examination activities like defining exam patterns with question banks, defining exam timer, objective/ subjective question sections, conducting exams using the computer or mobile devices in a paperless manner.

Online Examination System is a cost-effective, scalable way to convert traditional pen and paper-based exams to online and paperless mode.

Candidates can appear for the exam using any desktop, laptop, or mobile device with a browser. Exam results can be generated instantly for the objective type of questions.

It can simplify overall examination management and result in generation activity.</p>


</div>
<div class="side_image">
    <img src="image/sideimage.jpg">
</div>
</div>
<div class="about_developer">
<h3>About Developer</h3>
<p>This web base online examination system is developed by BCA students of Butwal Kalika Campus for
    internal Projects work.

</p>

</div>
</center>
<?php 
include_once "footer.php";
?>
    
</body>
</html>