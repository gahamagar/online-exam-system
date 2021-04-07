<?php 
session_start();
$firstName = "";
// $lastName = "";
$message = "";
if (isset($_SESSION['first_name'])) {
    $firstName = $_SESSION['first_name'];

    // if (isset($_SESSION['last_name'])) {
    //     $lastName = $_SESSION['last_name'];
}
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    //  echo $message;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Online Examination System | Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="heading">
        <h1>ONLINE EXAMINATION SYSTEM</h1>
        <h3>Test Your Skills and Upgrade Yourself</h3>
        <div class="dropdown">
            <span onclick="myFunction()" class="dropbtn"><i class="fa fa-user-circle-o fa-2x"></i></span>
            <div id="myDropdown" class="dropdown-content">
                <a>Signed in As</a>
                <a><i class="fa fa-user-circle-o" aria-hidden="true"></i> <b><?php echo $firstName ?></b></a><hr>
                <a href="./admin/adminlogin.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</a>
                <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Help</a>
                <a><i class="fa fa-cogs" aria-hidden="true"></i> Setting</a>
                <a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
            </div>
        </div>
    </div>
    <div class="nav_bar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="exam.php">Take Exam</a></li>
            <li><a href="result.php">Results</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="about.php">About us</a></li>
        </ul>
    </div>
    <div id="page-wrap">

        <?php

        require_once './connection.php';

        $query = mysqli_query($connection, "SELECT * FROM questions");
        $totalQuestions = mysqli_num_rows($query);
        $correct_ans ='correct_ans';
        $answer = $_POST['correct_ans'];
       
       
        $totalCorrect = 0;
        $onecorrect = 5;

        if ($answer == "correct_ans") {
            $totalCorrect++;
        }
      


        $examResult = number_format($totalCorrect * $onecorrect);
        // $avgExamResult = number_format($examResult / $totalQuestions, 2);
?>

<center>
        <div class="result_box">
            <!-- <h1>"Congratulations"</h1> -->
            <h1><?php echo $firstName?></h1>
            <h3>You have obtained <?php $totalCorrect?></h3>
        <?php
      

        echo "<div id='results'><h3>$totalCorrect Out Of $totalQuestions</h3></div>";

        ?>
        <h3><a href="result.php">Click Here</a> To Check Your Position</h3>
        </div>
        </center>
    </div>



</body>

</html>