 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Students Detail Update</title>
</head>
<body>
    <div class="main_heading">
        <h1>ONLINE EAMINATION SYSTEM</h1>
    </div>
    <center>
    <form  action="editaction.php" method="post"class="form_box_register">
        <div class="heading">
            <h1>
             UPDATE
            </h1>
        </div>
        <?php 
        include '../connection.php';
        $id = $_GET['id'];

        $sql = "SELECT * FROM students WHERE id = ".$id;

        $result = mysqli_query($connection, $sql);

        if($result){
            $row = mysqli_fetch_assoc($result);
            $fname = $row['first_name'];
            $lname = $row['last_name'];
            $mobile = $row['mobile_no'];
            $address = $row['address'];
            $email = $row['email'];
        }
        
        ?>

        <input type="name" class="form-element" name="first_name" value="<?php global $fname; echo $fname?>" placeholder="First Name" required=''>
        <input type="name"class="form-element" name="last_name" value="<?php global $lname; echo $lname?>" placeholder="Last Name" required=''>
        <input type="name"class="form-element" name="mobile" value="<?php global $mobile; echo $mobile?>" placeholder="Mobile Number" required=''>
        <input type="name"class="form-element" name="address" value="<?php global $address; echo $address?>" placeholder="Address" required=''>
        <input type="name" class="form-element" name="email" value="<?php global $email; echo $email?>" placeholder="Email" required=''>
        <input type="hidden" class="form-element" name="id" id="id" value="<?php global $id; echo $id?>" required=''>
        <button type="submit" class="form-element">Update</button>                                                                                                               
    </form>
</center>
</body>
</html>