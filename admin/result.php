<?php
include '../connection.php';

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
    <link rel="stylesheet" href="../style.css">
    <title>Student Results Sheet</title>
</head>

<body>
    <center>
        <div class="heading">
            <h1>ONLINE EXAMINATION SYSTEM</h1>
            <?php include '../userprofile.php' ?>
        </div>
        <div class="nav_bar">
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a href="exam.php">Take Exam</a></li>
                <!-- <li><a href="result.php">Results</a></li> -->
                <li><a href="contactus.php">Contact us</a></li>
                <li><a href="about.php">About us</a></li>
            </ul>
        </div>

        <div class="heading">
            <h2 style="text-align: center;">Online Examination Results Sheet</h2>
        </div>
        <table>
            <tr>
                <th>Student_Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Obtain Marks</th>
                <th>Full Marks</th>
                <th>Grade</th>
                <th>Rank</th>
                <th>Remarks</th>
            </tr>
            <?php for ($i = 1; $i < 2; $i++) : ?>
                <tr>
                    <td>00<?php echo $i ?></td>
                    <td>Jayanti</td>
                    <td>Shrestha</td>
                    <td>Devinagar</td>
                    <td>48</td>
                    <td>50</td>
                    <td>A+</td>
                    <td><?php echo $i ?></td>
                    <td>Null</td>
                </tr>

                <tr>
                    <td>002</td>
                    <td>Ganesh</td>
                    <td>Gaha</td>
                    <td>Hospital line</td>
                    <td>4<?php echo $i ?></td>
                    <td>50</td>
                    <td>A</td>
                    <td>2</td>
                    <td>Null</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>Butwal 10 Kalikanagar</td>
                    <td>4<?php echo $i ?></td>
                    <td>50</td>
                    <td>A</td>
                    <td>2</td>
                    <td>Null</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Ganesh</td>
                    <td>Gaha</td>
                    <td>Hospital line</td>
                    <td>4<?php echo $i ?></td>
                    <td>50</td>
                    <td>A</td>
                    <td>2</td>
                    <td>Null</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Ganesh</td>
                    <td>Gaha</td>
                    <td>Hospital line</td>
                    <td>4<?php echo $i ?></td>
                    <td>50</td>
                    <td>A</td>
                    <td>2</td>
                    <td>Null</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Ganesh</td>
                    <td>Gaha</td>
                    <td>Hospital line</td>
                    <td>4<?php echo $i ?></td>
                    <td>50</td>
                    <td>A</td>
                    <td>2</td>
                    <td>Null</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Ganesh</td>
                    <td>Gaha</td>
                    <td>Hospital line</td>
                    <td>4<?php echo $i ?></td>
                    <td>50</td>
                    <td>A</td>
                    <td>2</td>
                    <td>Null</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Ganesh</td>
                    <td>Gaha</td>
                    <td>Hospital line</td>
                    <td>4<?php echo $i ?></td>
                    <td>50</td>
                    <td>A</td>
                    <td>2</td>
                    <td>Null</td>
                </tr>

            <?php endfor ?>
        </table>

        <div class="printresult">
            <button onclick="window.print()">Print Result</button>
        </div>
    </center>
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
    </script>
    <?php
    require_once '../footer.php' ?>
</body>

</html>