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
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<body>
    
<div class="heading">

<h1>WEL COME TO ADMIN PANEL</h1>
<?php include '../userprofile.php';

?>
</div>

<div class="nav_bar">
    <ul>
    <li><a href="#">Home</a></li>
    <li><a href="studentmanage.php">Students Manage</a></li>
    <li><a href="qnsadd.php">Add Questions</a></li>
    <li><a href="qnslist.php">Question Lists</a></li>
    </ul>
</div>
<center>
<div class="main">
    <h1>Admin Control Panel</h1>
<div class="control_box">

<h2>Wel come to Admin Control Panel</h2>
<p>You Can Manage your Students and Online Examination System Form Here.....</p>

</div>
</div>

<footer class="footer-page">
        <a href="#">Home</a>
        |
        <a href="#">Privacy Policy</a>

        <p class="rights">&copy;2021 All Rights Reserved</p>

    </footer>


    </center>
</body>
</html>