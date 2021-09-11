<?php
require_once "../connection.php";

$email = $_POST['email'];
// echo $email."</br>";
$password = $_POST['password'];
// echo   $password."</br>";
$sql = "select * from students where email='$email'";
$query = mysqli_query($connection, $sql);
$result = mysqli_fetch_array($query);
// echo $result['email'];
// echo $result['password'];
$useremail = $result['email'];
$userpassword = $result['password'];

if ($userpassword == $password) {
    // echo "login successfull";
    session_start();
    $_SESSION['first_name'] = $result['first_name'];
    $_SESSION['last_name'] = $result['last_name'];
    // $_SESSION['message'] = "LogOut";

    header('Location: adminpanel.php');
} else {
    // echo "invalid credentials";

    session_start();
    $_SESSION['message'] = "Incorrect Password";
    header('Location: index.php');
}
