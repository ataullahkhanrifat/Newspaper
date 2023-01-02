
	<?php
	include('header.php');
	$servername = "localhost";
	$username = "root";
	$password = "";
	$_SESSION['active']='breaking';
	$conn = mysqli_connect($servername, $username, $password,'newspaper');
	$sql='select * from breaking_news order by id desc';
	$result=mysqli_query($conn, $sql);

	if(isset($_POST['news'])){
		$news=$_POST['news'];
		$gggggg='insert into breaking_news (news)values("'.$news.'")';
		mysqli_query($conn, $gggggg);
	}

	?>
	<div class="col-md-10 col-md-offset-1" style="margin-bottom: 2%">
	<form action="" method="post">
		<strong>Breaking News</strong>
		<br>
		<input type="text" name="news" class="form-control">
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
			<th>News</th>
			<th>Control</th>
		</tr>
		<?php $i=0; while($row=mysqli_fetch_assoc($result)){ $i+=1;?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row['news'] ?></td>
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