<?php

require_once '../connection.php';
$id = $_POST['id'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$email = $_POST['email'];

$sql = "UPDATE students SET first_name='$fname', last_name='$lname', mobile_no='$mobile', address='$address', email='$email' WHERE id = $id";
$result = mysqli_query($connection, $sql);

if($result){

    header("location: studentmanage.php");
}

?>