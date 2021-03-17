<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Questions</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
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
            <li><a href="index.php">Home</a></li>
            <li><a href="exam.php">Enroll Exam</a></li>
            <li><a href="result.php">Results</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>
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
        <button type="submit" class="form-element-login">Submit Qiuz</button>
    </form>
    <!-- <?php require_once 'footer.php'; ?> -->
</body>

</html>