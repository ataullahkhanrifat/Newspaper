<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password,'newspaper');

$sql1="select * from news where id=".$_GET['id'];
$r=mysqli_fetch_assoc(mysqli_query($conn, $sql1));
unlink('../images/'.$r['photo']);

$sql="delete from news where id=".$_GET['id'];
if(mysqli_query($conn, $sql)){
		header('Location: news.php');
	}else{
		echo "Error !";
	}
?>