<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
<?php 
    include '../connection.php';
    $id = $_GET['id'];

   
    if($result){
        $row = mysqli_fetch_assoc($result);
        $question = $row['question'];
        $ans_a = $row['ans_1'];
        $ans_b = $row['ans_2'];
        $ans_c = $row['ans_3'];
        $ans_d = $row['ans_4'];
        $Correctans = $row['Correct_ans'];
    }

    $sql = "UPDATE  questions SET question='$question', ans_1='$ans_a', qns_2='$ans_b', qns_3='$ans_c', qns_4='$ans_d', correct_ans='$Correctans'";
    $result = mysqli_query($connection, $sql);
    ?>

    <div class="heading">
<h1>You Can Update Questions From Here</h1>

</div>
<form action="updateaction.php" class="qnsadd" method="POST">
    <input type="name" name="number" class="form-element-login" placeholder="Question No." reqiured>
    <input type="name" name="question" class="form-element-login" placeholder="Enter Question" reqiured=''>
    <input type="name" name="ans_1" class="form-element-login" placeholder="Option A" reqiured=''>
    <input type="name" name="ans_2" class="form-element-login" placeholder="Option B" reqiured=''>
    <input type="name" name="ans_3" class="form-element-login" placeholder="Option C" reqiured=''>
    <input type="name" name="ans_4" class="form-element-login" placeholder="Option D" reqiured=''>
    <input type="name" name="Correct_ans" class="form-element-login" placeholder="Correct Answer" reqiured=''>
    <input type="hidden" class="form-element" name="id" id="id" value="<?php global $id; echo $id?>" required=''>

<button type="submit" class="form-element-login">Add Question</button>

</form>

    

</body>
</html>