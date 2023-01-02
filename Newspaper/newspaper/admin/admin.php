
	<?php
	include('header.php');
	$servername = "localhost";
	$username = "root";
	$password = "";
	$_SESSION['active']='admin';
	$conn = mysqli_connect($servername, $username, $password,'newspaper');
	$sql='select * from admin';
	$result=mysqli_query($conn, $sql);

	if(isset($_POST['name'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$gggggg='insert into admin (name,email,password)values("'.$name.'","'.$email.'","'.$password.'")';
		mysqli_query($conn, $gggggg);
	}

	?>
	<div class="col-md-10 col-md-offset-1" style="margin-bottom: 2%">
	<form action="" method="post">
		<strong>Name</strong>
		<br>
		<input type="text" name="name" class="form-control">
		<br>
		<strong>Email </strong>
		<br>
		<input type="email" name="email" class="form-control"> 
		<br>
		<strong>Password </strong>
		<br>
		<input type="password" name="password" class="form-control"> 
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
			<th>Name</th>
			<th>Email</th>
			<th>Control</th>
		</tr>
		<?php $i=0; while($row=mysqli_fetch_assoc($result)){ $i+=1;?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td>
				<a href="edit_admin.php?id=<?=$row['id']?>" class="btn btn-sm btn-success">Edit</a>
				<a href="delete_admin.php?id=<?=$row['id']?>" class="btn btn-sm btn-danger">Delete</a>
			</td>
		</tr>

		<?php } ?>
	</table>
</div>
	<script src="../js/jquery.js" ></script>
	<script src="../js/bootstrap.min.js" ></script>
</body>
</body>