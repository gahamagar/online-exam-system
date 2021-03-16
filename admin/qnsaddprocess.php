<?php 
include '../connection.php';

$question = $_POST['question'];
$option_a = $_POST['ans_a'];
$option_b = $_POST['ans_b'];
$option_c = $_POST['ans_c'];
$option_d= $_POST['ans_d'];
$correct_ans = $_POST['correct_ans'];
// echo "question is".$question;


$sql = "INSERT INTO questions (question, option_a, option_b, option_c, option_d, correct_ans) VALUES('$question','$option_a', '$option_b', '$option_c', '$option_d', '$correct_ans')";
$query = mysqli_query($connection, $sql);
if($query){
    echo "question added sucessfully";
    header('location: qnsadd.php');
}
else{
    echo "question add failed";
}

?>