<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>News24</title>
  <meta charset="iso-8859-1">
  <link rel="stylesheet" href="styles/layout.css" type="text/css">
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

  $sql_123176='select * from breaking_news order by id desc limit 10';
  $result_123176=mysqli_query($conn, $sql_123176);
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
      <section id="slider"><a href="#"><img src="images/1.jpg" width="960" height="360" alt=""></a></section>
      <!-- main content -->
      <section style="background: green; color: #fff">
        <style type="text/css">
        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
    margin-right: 20px;
}
        </style>
        <marquee>
          <ul>
            <?php while($b=mysqli_fetch_assoc($result_123176)){ ?>
            <li><img src="images/ico.png" width="20" height="20">   <?=$b['news']?></li>
            <?php } ?>
          </ul>
        </marquee>
      </section>
      <div id="homepage">
        <!-- services area -->
        <section id="services" class="clear">
         <?php $i=0; while($row=mysqli_fetch_assoc($result)){ $i+=1; ?>
         <article class="one_quarter  <?php if($i==4){echo 'lastbox';} ?>" >
          <figure><img src="images/<?php echo $row['photo'] ?>" width="52" height="52" alt=""></figure>
          <strong><?php echo $row['headline'] ?></strong>
          <p style="text-align: justify"><?php echo mb_substr($row['details'],0,150)?></p>
          <p class="more"><a href="details.php?id=<?=$row['id']?>">Read More &raquo;</a></p>
        </article>
        <?php } ?>
      </section>
      <section id="latest">
        <article>
          <figure>
            <ul class="clear">
              <?php $r=0;  while($row=mysqli_fetch_assoc($result_123)){ $r+=1; ?>
              <li class="one_third <?php if($r==3){ echo 'lastbox';} ?>"><img src="featured_photo/<?=$row['photo']?>" width="250" height="180" alt=""></li>
              <?php } ?>
            </ul>
            
          </figure>
        </article>
      </section>
      <!-- / latest work -->
    </div>
    <!-- main content -->
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
    <p class="fl_right"><a href="http://codezenbd.com" title="News24">News24</a></p>
  </footer>
</div>
</body>
</html>
