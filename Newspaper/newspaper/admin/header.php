<?php
@session_start();
if(!isset($_SESSION['adminID'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Newspaper Admin</title>
	<meta charset="iso-8859-1">
	<link rel="stylesheet" href="../css/bootstrap.min.css" >
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >
</head>
<body>
	<div class="row">
		<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li <?php  if($_SESSION['active']=='category'){ echo 'class="active"';} ?> ><a href="category.php">Category <span class="sr-only">(current)</span></a></li>
            <li <?php  if($_SESSION['active']=='news'){ echo 'class="active"';} ?> ><a href="news.php">News</a></li>
            <li <?php  if($_SESSION['active']=='photo'){ echo 'class="active"';} ?> ><a href="photo.php">Featured Photo</a></li>
            <li <?php  if($_SESSION['active']=='admin'){ echo 'class="active"';} ?> ><a href="admin.php">Admin</a></li>
            <li <?php  if($_SESSION['active']=='breaking'){ echo 'class="active"';} ?> ><a href="breaking.php">Breaking News</a></li>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php">Logout</a></li>
            </ul>


          </ul>
        </div>
      </div>
    </nav>
  </div>