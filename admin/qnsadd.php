<?php
require_once "../connection.php";

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
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Question Add</title>
    
</head>
<body>
<div class="heading">

<h1>WEL COME TO ADMIN PANEL</h1>
<?php include '../userprofile.php';?>

</div>

<div class="nav_bar">
    <ul>
    <li><a href="controlpannel.php">Home</a></li>
    <li><a href="studentmanage.php">Student Manage</a></li>
    <li><a href="qnsadd.php">Add Questions</a></li>
    <li><a href="qnslist.php">Question Lists</a></li>
    </ul>
</div>
<center>
<div class="heading">
<h1>You Can Add Questions From Here</h1>

</div>
<form action="qnsaddprocess.php" class="qnsadd" method="POST">
    <input type="name" name="number" class="form-element-login" placeholder="Question No.">
    <input type="name" name="question" class="form-element-login" placeholder="Enter Question" required>
    <input type="name" name="ans_a" class="form-element-login" placeholder="Option A" required>
    <input type="name" name="ans_b" class="form-element-login" placeholder="Option B" required>
    <input type="name" name="ans_c" class="form-element-login" placeholder="Option C" required>
    <input type="name" name="ans_d" class="form-element-login" placeholder="Option D" required>
    <input type="name" name="correct_ans" class="form-element-login" placeholder="Correct Answer" required>
<button type="submit" class="form-element-login">Add Question</button>

</form>
<footer class="footer-page">
        <a href="#">Home</a>
        |
        <a href="#">Privacy Policy</a>

        <p class="rights">CopyRights &copy;2021 All Rights Reserved</p>

    </footer>
</center>
    
</body>
</html>