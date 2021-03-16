<?php
require_once '../connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id=$id";
$result = mysqli_query($connection, $sql);
if($result){
    header("location: studentmanage.php");
}
else{
    echo "student delete failed";
}


?>