
	<?php
	include('header.php');
	$servername = "localhost";
	$username = "root";
	$password = "";
	$_SESSION['active']='category';
	$conn = mysqli_connect($servername, $username, $password,'newspaper');
	$sql='select * from news_category';
	$result=mysqli_query($conn, $sql);

	if(isset($_POST['category'])){
		$category=$_POST['category'];
		$menu=$_POST['menu'];
		$gggggg='insert into news_category (name,main_menu)values("'.$category.'","'.$menu.'")';
		mysqli_query($conn, $gggggg);
	}

	?>
	<div class="col-md-10 col-md-offset-1" style="margin-bottom: 2%">
	<form action="" method="post">
		<strong>Category</strong>
		<br>
		<input type="text" name="category" class="form-control">
		<br>
		<strong>Menu </strong>
		<br>
		<input type="radio" name="menu" value="yes"> Yes  <input type="radio" name="menu" value="no"> No
		<br>
		<br>
		<div class="row">
			<div class="col-md-6"><input type="submit" value="Save" class="btn btn-block btn-success"></div>
			<div class="col-md-6"><input type="reset" value="Reset" class="btn btn-block btn-danger"></div>
		</div>
	</form>
	<br>
	<table class="table table-bordered table-hover">
		<tr>
			<th>SL</th>
			<th>Category</th>
			<th>Main Menu</th>
			<th>Control</th>
		</tr>
		<?php $i=0; while($row=mysqli_fetch_assoc($result)){ $i+=1;?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['main_menu'] ?></td>
			<td>
				<a href="edit.php?id=<?=$row['id']?>" class="btn btn-sm btn-success">Edit</a>
				<a href="delete.php?id=<?=$row['id']?>" class="btn btn-sm btn-danger">Delete</a>
			</td>
		</tr>

		<?php } ?>
	</table>
</div>
	<script src="../js/jquery.js" ></script>
	<script src="../js/bootstrap.min.js" ></script>
</body>
</body>