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
    <link rel="stylesheet" href="../style.css">
    <title>Question Lists</title>
</head>

<body>
    <div class="heading">

        <h1>WEL COME TO ADMIN PANEL</h1>
        <?php include '../userprofile.php';?>

    </div>

    <div class="nav_bar">
        <ul>
            <li><a href="adminpanel.php">Home</a></li>
            <li><a href="studentmanage.php">Student Manage</a></li>
            <li><a href="qnsadd.php">Add Questions</a></li>
            <li><a href="qnslist.php">Question Lists</a></li>
        </ul>
    </div>
    <center>
        <div class="qns-list">

            <h1>Admin Panel-Question Lists</h1>

        </div>
        <form action="qnsaddprocess.php" method="post">
            <table border="solid" width="50%">

                <tr>

                    <th width="10%">S.N</th>
                    <th width="70%">Questions</th>
                    <th width="20%">Action</th>

                </tr>

                <?php
                include_once '../connection.php';
                $sql = "SELECT * FROM questions";
                $result = mysqli_query($connection, $sql);

                if ($result) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $question = $row['question'];
                ?>

                        <tr>

                            <td><?php echo $i ?></td>
                            <td><?php echo $question ?></td>
                            <td>
                                <a onclick="return confirm('Are you Sure to remove')" href="qnsdelete.php?id=<?php echo $row['id'] ?>">Remove</a>
                                <a onclick="return confirm('Are you sure to update this question')" href="qnsupdate.php?id=<?php echo $row['id'] ?>">Update</a>
                            </td>

                        </tr>
                <?php
                        $i++;
                    }
                }

                ?>
            </table>
        </form>
        <footer class="footer-page">
            <a href="#">Home</a>
            |
            <a href="#">Privacy Policy</a>

            <p class="rights">&copy;2021 All Rights Reserved</p>

        </footer>
    </center>

</body>

</html>