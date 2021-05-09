<?php 
    include '../connection.php';
    $id = $_GET['id'];

    $sql = "SELECT * FROM questions WHERE id = '$id'";

    $result = mysqli_query($connection, $sql);

    if($result){
        $row = mysqli_fetch_assoc($result);
        $question = $row['question'];
        $ans_a = $row['option_a'];
        $ans_b = $row['option_b'];
        $ans_c = $row['option_c'];
        $ans_d = $row['option_d'];
        $correctans = $row['correct_ans'];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Question Update</title>
</head>
<body>
<center>
<div class="heading">   
<h1>You Can Update Questions From Here</h1>

</div>
<form action="updateaction.php?id=<?php echo $id?>" class="qnsadd" method="POST">

    <input type="name" name="number" class="form-element-login" value="<?php global $id; echo $id?>" placeholder="Question No." required>
    <input type="name" name="question" class="form-element-login" value="<?php global $question; echo $question ?>" placeholder="Enter Question" required>
    <input type="name" name="ans_1" class="form-element-login" value="<?php global $ans_a; echo $ans_a ?>" placeholder="Option A" required>
    <input type="name" name="ans_2" class="form-element-login" value="<?php global $ans_b; echo $ans_b ?>" placeholder="Option B" required>
    <input type="name" name="ans_3" class="form-element-login" value="<?php global $ans_c; echo $ans_c ?>" placeholder="Option C" required>
    <input type="name" name="ans_4" class="form-element-login" value="<?php global $ans_d; echo $ans_d ?>" placeholder="Option D" required>
    <input type="name" name="correct_ans" class="form-element-login"value="<?php global $correctans; echo $correctans ?>"  placeholder="Correct Answer" required>
    <input type="hidden" class="form-element" name="id" id="id" value="<?php global $id; echo $id?>" required>
    <button type="submit" class="form-element-login">UPDATE</button>

</form>
</center>
</body>
</html>