<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 80%;
            border: 1px solid #CC471B;
            margin: 30px;

        }


        td,
        th {
            /* border: 1px solid #000; */
            text-align: center;
            padding: 8px;
        }

        table tr:first-child {
            color: #fff;
            background: #CC471B;
            border: 0;

        }
    </style>
    <link rel="stylesheet" href="style.css">
    <title>Student Results Sheet</title>
</head>

<body>
    <center>
    <div class="heading">
        <h1>ONLINE EXAMINATION SYSTEM</h1>
    </div>
    <div class="nav_bar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="exam.php">Enroll Exam</a></li>
            <li><a href="result.php">Results</a></li>
            <li><a href="contactus.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <!-- <li><a href="#">

                </a></li> -->
        </ul>
    </div>

        <form action="" method="POST">

            <div class="heading">
                <h2>Online Examination Result Sheet</h2>
            </div>
            <table>
                <tr>
                    <th>Student_Id</th>
                    <th>FIrst Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Obtain Marks</th>
                    <th>Full Marks</th>
                    <th>Grade</th>
                    <th>Rank</th>
                    <th>Remarks</th>
                </tr>
                <?php for($i=1; $i<10; $i++):?>
                <tr>
                    <td>00<?php echo $i ?></td>
                    <td>Ganesh</td>
                    <td>Gaha</td>
                    <td>Devinagar</td>
                    <td>4<?php echo $i ?></td>
                    <td>50</td>
                    <td>A</td>
                    <td><?php echo $i ?></td>
                    <td>Null</td>
                </tr>
                <?php endfor ?>
            </table>
        </form>

    </center>
    <?php 
    require_once 'footer.php'?>
</body>

</html>