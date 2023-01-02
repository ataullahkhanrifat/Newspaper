
	<?php
	include('header.php');
	$servername = "localhost";
	$username = "root";
	$password = "";
	$_SESSION['active']='home';
	$conn = mysqli_connect($servername, $username, $password,'newspaper');
	$sql='select * from news_category';
	$result=mysqli_query($conn, $sql);

	if(isset($_POST['details'])){
		$headline=$_POST['headline'];
		$details=$_POST['details'];
		$category=$_POST['category'];
		$gggggg='insert into news (headline,details,category)values("'.$headline.'","'.$details.'","'.$category.'")';
		mysqli_query($conn, $gggggg);
	}

	?>
	<div class="col-md-10 col-md-offset-1" style="margin-bottom: 2%; padding-top:15%; padding-left:10%">
	<h1>Welcome to admin panel</h1>
</div>
	<script src="../js/jquery.js" ></script>
	<script src="../js/bootstrap.min.js" ></script>
</body>
</body>