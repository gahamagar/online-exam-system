<?php

require_once '../connection.php';
$id = $_GET['id'];
$question = $_POST['question'];
$ans_a = $_POST['ans_1'];
$ans_b = $_POST['ans_2'];
$ans_c = $_POST['ans_3'];
$ans_d = $_POST['ans_4'];
$correct_ans = $_POST['correct_ans'];

$sql = "UPDATE questions SET question='$question', option_a='$ans_a', option_b='$ans_b', option_c='$ans_c', option_d='$ans_d', correct_ans='$correct_ans' WHERE id = $id";
$result = mysqli_query($connection, $sql);

if($result){

    header("location: qnslist.php");
}
else{
    echo "Question Update Failed";
}
?>