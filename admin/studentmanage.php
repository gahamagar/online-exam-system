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

<!doctype html>
<html>

<head>
	<title>Students List</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="../style.css">
</head>

<body>
	<div class="heading">

		<h1>WEL COME TO ADMIN PANEL</h1>
		<?php include '../userprofile.php';?>

	</div>

	<div class="nav_bar">
		<ul>
			<li><a href="controlpannel.php">Home</a></li>
			<li><a href="studentmanage.php">Student Manage</a></li>
			<li><a href="qnsadd.php">Add Questions</a></li>
			<li><a href="qnslist.php">Question Lists</a></li>
		</ul>
	</div>
	<center>
		<div class="main">
			<h1>Admin Panel - Manage Students</h1>

			<div class="manageuser">
				<table class="tblone" border="solid">

					<tr>
						<th width="5%">id</th>
						<th width="20%">Student Name</th>
						<th width="25%">Email</th>
						<th width="20%">Address</th>
						<th width="15%">Mobile No.</th>
						<th width="15%">Action</th>
					</tr>

					<?php
					require_once '../connection.php';
					$sql = "SELECT * FROM students";
					$query = $connection->query($sql);
					$i = 1;
					while ($result = $query->fetch_assoc()) :
					?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $result['first_name'] . ' ' . $result['last_name'] ?></td>
							<td><?php echo $result['email'] ?></td>
							<td><?php echo $result['address'] ?></td>
							<td><?php echo $result['mobile_no'] ?></td>
							<td>
								<a onclick="return confirm('Are you sure to update this Student Details?')" href="edit.php?id=<?php echo $result['id']?>">Update</a>
								<a onclick="return confirm('Are you sure to remove this Student?')" href="delete.php?id=<?php echo $result['id'] ?>">Delete</a>
							</td>

						</tr>
					<?php $i++;
					endwhile ?>


				</table>

			</div>


		</div>
		</div>
		<!-- <?php
				include_once "footer.php";
				?> -->
		<footer class="footer-page">
			<a href="#">Home</a>
			|
			<a href="#">Privacy Policy</a>

			<p class="rights">&copy;2021 All Rights Reserved</p>

		</footer>
	</center>

</body>

</html>