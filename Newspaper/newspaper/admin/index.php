<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Newspaper Admin</title>
	<meta charset="iso-8859-1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" >
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >

</head>
<body style="background: #73996f">
	<?php
	@session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername, $username, $password,'newspaper');

	if(isset($_POST['email'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql='select * from admin where email="'.$email.'" and password="'.$password.'"';
		$result=mysqli_fetch_assoc(mysqli_query($conn, $sql));
		if(!empty($result)){
			$_SESSION['adminID']=$result['id'];
			$_SESSION['adminName']=$result['name'];
			header('Location: dashboard.php');
		}
	}
	?>
	<div class="col-md-4 col-md-offset-4" style="margin-top: 15%; background:#eef7ed; padding-bottom: 2%">
		<form action="" method="post">
			<h2 align="center">Admin Login</h2>
			<strong>E-mail</strong>
			<br>
			<input type="text" name="email" class="form-control">
			<br>
			<strong>Password</strong>
			<br>
			<input type="password" name="password" class="form-control">
			<br>
			<input type="submit" value="Login" class="btn btn-block btn-primary">
		</form>
	</div>
	<script src="../js/bootstrap.min.js" ></script>
	<script src="../js/jquery.js" ></script>
</body>