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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Online Examination System | Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div id="page-wrap">

        <h1>Final Results</h1>

        <?php

        require_once './connection.php';

        $query = mysqli_query($connection, "SELECT * FROM questions");
        $totalQuestions = mysqli_num_rows($query);

        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        // $answer4 = $_POST['question-4-answers'];
        // $answer5 = $_POST['question-5-answers'];
        // $answer6 = $_POST['question-6-answers'];
        // $answer7 = $_POST['question-7-answers'];
        // $answer8 = $_POST['question-8-answers'];
        // $answer9 = $_POST['question-9-answers'];
        // $answer10 = $_POST['question-10-answers'];

        $totalCorrect = 0;
        $onecorrect = 5;

        if ($answer1 == "B") {
            $totalCorrect++;
        }
        if ($answer2 == "A") {
            $totalCorrect++;
        }
        if ($answer3 == "C") {
            $totalCorrect++;
        }
        // if ($answer4 == "D") { $totalCorrect++; }
        // if ($answer5 == "A") { $totalCorrect++; }
        // if ($answer6 == "A") { $totalCorrect++; }
        // if ($answer7 == "B") { $totalCorrect++; }
        // if ($answer8 == "D") { $totalCorrect++; }
        // if ($answer9 == "C") { $totalCorrect++; }
        // if ($answer10 == "C") { $totalCorrect++; }
        // if ($answer10) { $totalCorrect++; }


        $examResult = number_format($totalCorrect * $onecorrect, 2);
        $avgExamResult = number_format($examResult / $totalQuestions, 2);
?>

<center>
        <div class="result_box">
            <h1>"Congratulations"</h1>
            <h3><?php echo $firstName ?></h3>
            <h3>You have obtained <?php $totalCorrect?></h3>
        <?php
        // echo "Result => " . $examResult;
        // echo "<br />Avg Result => " . $avgExamResult;

        echo "<div id='results'>$totalCorrect Out of  $totalQuestions </div>";

        ?>
        </div>
        </center>
    </div>



</body>

</html>