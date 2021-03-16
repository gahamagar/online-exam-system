<?php
require_once "connection.php";

$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="insert into students (first_name, last_name,mobile_no, address, email,password) values('$fname','$lname','$mobile', '$address', '$email','$password')";
$query=mysqli_query($connection,$sql);
if($query){
// echo "data inserted successfully";

// Change here
header('Location: index.php');
session_start();
$_SESSION['first_name'] = $result['first_name'];


}
else{
    echo"data not inserted";
}



?>