
<?php
session_start();
$firstName = "";
$message = "";
if (isset($_SESSION['first_name'])) {
    $firstName = $_SESSION['first_name'];
}
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    //  echo $message;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
    <title>Online Examination System | Contact Us</title>
</head>
<body>
<!-- <?php  include 'userprofile.php' ?> -->

<!-- <?php require_once 'navbar.php'?> -->

<section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis necessitatibus 
        repellat commodi id quaerat laborum optio. Perspiciatis magni laborum veniam nobis minima.</p>
    </div>
    <div class="container">
        <div class="contactinfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>Butwal 10,<br>Kalikanagar Rupandehi</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>9811110000</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>bcastudentbtlkalika@gmail.com</p>
                </div>
            </div>
        </div>

        <!-- Contact form start -->
        <div class="contactform">
            <form>
                <h2>Send Message</h2>
                <div class="inputbox">
                    <input type="text"name="" required="required">
                    <span>Full Name</span>
                </div>
                <div class="inputbox">
                    <input type="text"name="" required="required">
                    <span>Email</span>
                </div>
                <div class="inputbox">
                    <textarea required="required"></textarea>
                    <span>Type your Message....</span>
                </div>
                <div class="inputbox">
                    <input type="submit" name="" value="Send">
                </div>
            </form>
        </div>
        <!-- Contact form end -->
    </div>
</section>
<?php 
include_once "footer.php";
?>
    
</body>
</html>