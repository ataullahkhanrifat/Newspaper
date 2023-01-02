
<?php
include('header.php');
$servername = "localhost";
$username = "root";
$password = "";
$_SESSION['active']='photo';
$conn = mysqli_connect($servername, $username, $password,'newspaper');
$sql='select * from photo order by id desc';
$result=mysqli_query($conn, $sql);

if(isset($_POST['sub'])){
	$target_dir = "../featured_photo/";
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$photo=$_FILES["photo"]["name"];
	if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
		$y='insert into photo (photo)values("'.$photo.'")';
		mysqli_query($conn, $y);
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}
?>
<div class="col-md-10 col-md-offset-1" style="margin-bottom: 2%">
	<form action="" method="post" enctype="multipart/form-data">
		<strong>Photo</strong>
		<br>
		<input type="file" name="photo" class="form-control">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-6"><input type="submit" value="Upload" name="sub" class="btn btn-block btn-success"></div>
			<div class="col-md-6"><input type="reset" value="Reset" class="btn btn-block btn-danger"></div>
		</div>
	</form>
	<br>
	<?php  while($row=mysqli_fetch_assoc($result)){ ?>
	<div class="col-md-3" style="min-height: 300px; border: 1px solid red">
<img src="../featured_photo/<?=$row['photo']?>" class="img-responsive">
	</div>
	<?php } ?>
</div>
<script src="../js/jquery.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
</body>
</body>