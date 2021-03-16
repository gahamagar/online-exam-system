<?php
$localhost="localhost";
$username="root";
$password="";
$dbname="online-exam-system";
$connection=mysqli_connect($localhost,$username,$password,$dbname);
if($connection)
{
    // echo "database connected successfully";
}

else{
    // echo "database connection failed";
}

?>