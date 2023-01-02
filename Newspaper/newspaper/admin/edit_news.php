
<?php
include('header.php');
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password,'newspaper');
$sql='select * from news_category';
$result=mysqli_query($conn, $sql);

$gggggg='select * from news order by id desc';
$r=mysqli_query($conn, $gggggg);

$gggggg2='select * from news where id='.$_GET['id'];
$r1=mysqli_query($conn, $gggggg2);
$tt=mysqli_fetch_assoc($r1);

if(isset($_POST['details'])){
	$headline=$_POST['headline'];
	$details=$_POST['details'];
	$category=$_POST['category'];
	$featured=$_POST['featured'];

	$target_dir = "../images/";
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$photo=$_FILES["photo"]["name"];
	if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {

	} else {
		echo "Sorry, there was an error uploading your file.";
	}
	echo $gggggg1='update news set headline="'.$headline.'",details="'.$details.'",category="'.$category.'",photo="'.$photo.'",featured="'.$featured.'" where id='.$_GET['id'];
	if(mysqli_query($conn, $gggggg1)){
		header('Location: news.php');
	}
}
?>
<div class="col-md-10 col-md-offset-1" style="margin-bottom: 2%">
	<h3>News List</h3>
	<table class="table table-bordered table-hover">
		<tr>
			<th>SL</th>
			<th>Headline</th>
			<th>Control</th>
		</tr>
		<?php
		$i=0;
		while ($row=mysqli_fetch_assoc($r)) {
			?>

			<tr>
				<td><?php echo ++$i ?></td>
				<td><?php echo $row['headline'] ?></td>
				<td>
					<a href="edit_news.php?id=<?=$row['id']?>" class="btn btn-sm btn-success">Edit</a>
					<a href="delete_news.php?id=<?=$row['id']?>" class="btn btn-sm btn-danger">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<form action="" method="post" enctype="multipart/form-data">
			<strong>Category</strong>
			<br>
			<select name="category"  class="form-control">
				<option>Select</option>
				<?php while($row=mysqli_fetch_assoc($result)){ ?>
				<option value="<?php echo $row['id'] ?>" <?php if($row['id']==$tt['category']){ echo "selected";} ?>><?php echo $row['name'] ?></option>

				<?php } ?>
			</select>
			<br>
			<strong>Headline</strong>
			<br>
			<input type="text" name="headline" autofocus class="form-control" value="<?=$tt['headline']?>">
			<br>
			<strong>Details</strong>
			<br>
			<textarea name="details" cols="30" rows="15" class="form-control"><?=$tt['details']?></textarea>
			<br>
			<strong>Photo</strong>
			<br>
			<input type="file" name="photo" class="form-control">
			<img src="../images/<?=$tt['photo']?>" width="100" height="100">
			<br>
			<strong>Featured News</strong>
			<br>
			<input type="radio" name="featured" value="yes"> Yes
			<input type="radio" name="featured" value="no"> No
			<br>
			<br>
			<div class="row">
				<div class="col-md-6"><input type="submit" value="Save" class="btn btn-block btn-success"></div>
				<div class="col-md-6"><input type="reset" value="Reset" class="btn btn-block btn-danger"></div>
			</div>
		</form>
	</div>
	<script src="../js/jquery.js" ></script>
	<script src="../js/bootstrap.min.js" ></script>
</body>
</body>