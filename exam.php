<?php
include 'connection.php';
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

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Test Your Skill</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="heading">
        <h1>ONLINE EXAMINATION SYSTEM</h1>
        <?php include "userprofile.php"?>
    </div>
    
    <div class="nav_bar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="exam.php">Take Exam</a></li>
            <li><a href="result.php">Results</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="about.php">About us</a></li>
            <!-- <li><a href="#">

                </a></li> -->
        </ul>
    </div>

    <h1>Attempt to All Questions</h1>

    <form action="results.php" method="post" id="quiz">

        <ol>
            <?php
            require_once './connection.php';
            $sql = "SELECT * FROM questions";
            $query = mysqli_query($connection, $sql);
            $i = 1;
            while ($result = mysqli_fetch_assoc($query)) :
            ?>

                <li>

                    <h3><?php echo $result['question'] ?></h3>

                    <div>
                        <input type="radio" name="question-<?php echo $i ?>-answers" id="question-<?php echo $i ?>-answers-A" value="A" />
                        <label for="question-<?php echo $i ?>-answers-A">A) <?php echo $result['option_a'] ?></label>
                    </div>

                    <div>
                        <input type="radio" name="question-<?php echo $i ?>-answers" id="question-<?php echo $i ?>-answers-B" value="B" />
                        <label for="question-<?php echo $i ?>-answers-B">B) <?php echo $result['option_b'] ?></label>
                    </div>

                    <div>
                        <input type="radio" name="question-<?php echo $i ?>-answers" id="question-<?php echo $i ?>-answers-C" value="C" />
                        <label for="question-<?php echo $i ?>-answers-C">C)<?php echo $result['option_c'] ?></label>
                    </div>

                    <div>
                        <input type="radio" name="question-<?php echo $i ?>-answers" id="question-<?php echo $i ?>-answers-D" value="D" />
                        <label for="question-<?php echo $i ?>-answers-D">D) <?php echo $result['option_d'] ?></label>
                    </div>

                </li>

            <?php
                $i++;
            endwhile
            ?>

        </ol>
        <button type="submit" class="submit-btn">Submit Qiuz</button>
        <span type="submit" class="submit">Submit Quiz</span>
    </form>
    <?php require_once 'footer.php'; ?>
    
</body>

</html>