<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>News24</title>
  <meta charset="iso-8859-1">
  <link rel="stylesheet" href="styles/layout.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
</head>
<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($servername, $username, $password,'newspaper');
  $sql='select * from news order by id desc limit 4';
  $result=mysqli_query($conn, $sql);
  $sql_1='select * from news_category';
  $result_1=mysqli_query($conn, $sql_1);
  $sql_12='select * from news_category where main_menu="yes"';
  $result_12=mysqli_query($conn, $sql_12);

  $sql_123='select * from photo order by id desc limit 3';
  $result_123=mysqli_query($conn, $sql_123);

  $sql_1231='select * from news where featured="yes" order by id desc limit 2';
  $result_1231=mysqli_query($conn, $sql_1231);

  $sql_1678='select * from news where id='.$_GET["id"];
  $result_1678=mysqli_fetch_assoc(mysqli_query($conn, $sql_1678));

  ?>
  <div class="wrapper row1">
    <header id="header" class="clear">
      <div id="hgroup">
        <h1><a href="index.php">BDNEWS24</a></h1>
        <h2>update news all time</h2>
      </div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <?php while($e=mysqli_fetch_assoc($result_12)){ ?>
          <li ><a href="category.php?id=<?=$e['id']?>"><?php echo $e['name'] ?></a></li>
          <?php } ?>
        
        </ul>
      </nav>
    </header>
  </div>
  <!-- content -->
  <div class="wrapper row2">
    <div id="container" class="clear">
      <!-- Slider -->
      <section id="slider"><img src="images/<?=$result_1678['photo']?>" width="960" height="360" alt=""></section>
      <!-- main content -->
      <div id="homepage">
       <h1><?=$result_1678['headline']?></h1>
       <small><em><?=$result_1678['date']?></em></small>
       <p style="text-align: justify"><?=$result_1678['details']?></p>
    </div>
    <!-- main content -->
    <hr>
    <div id="content">
      <section id="posts" class="last clear">
        <ul>
          <?php $d=0; while($ro=mysqli_fetch_assoc($result_1231)){ $d+=1; ?>
          <li <?php if($d==2){ echo 'class="last"';} ?>>
            <article class="clear">
              <figure><img src="images/<?=$ro['photo']?>" alt="">
                <figcaption>
                  <h2><?=$ro['headline']?></h2>
                  <p style="text-align: justify"><?php echo mb_substr($ro['details'],0,250)?></p>
                  <footer class="more"><a href="details.php?id=<?=$ro['id']?>">Read More &raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
          <?php } ?>
        </ul>
      </section>
    </div>
    <!-- right column -->
    <aside id="right_column">
      <h2 class="title">Categories</h2>
      <nav>
        <ul>
          <?php while($r=mysqli_fetch_assoc($result_1)){ ?>
          <li><a href="category.php?id=<?=$r['id']?>"><?php echo $r['name'] ?></a></li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /nav -->
    </aside>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
   <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="#">RIFAT PROJECT</a></p>
    <p class="fl_right"> <a href="http://codezenbd.com" title="News24">News24</a></p>
  </footer>
</div>
</body>
</html>
<script src="js/jquery.js" ></script>
  <script src="js/bootstrap.min.js" ></script>