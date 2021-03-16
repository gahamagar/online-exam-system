<?php
require_once '../connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM questions WHERE sn=$id";
$result = mysqli_query($connection, $sql);
if($result){
    header("location: qnslist.php");
}
else{
    echo "Question delete failed";
}


?>