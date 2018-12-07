<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="resources/image/guk.ico">
  <link rel="stylesheet" type="text/css" href="resources/assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="resources/assets/css/style.css">
	<title>Review Adopsi</title>
</head>
<body>
<!--navbar --> 
<nav class="navbar navbar-inverse"> 
  <div class="container-fluid"> 
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Adopsi Hewan</a>
    </div> 
    <ul class="nav navbar-nav"> 
      <li><a href="?controller=home&action=homeMember">Home</a></li>
      <li class="active"><a href="?controller=animal&action=review">Review</a></li> 
      <li><a href="?controller=animal&action=adopsi">Adopsi</a></li>
      <li><a href="?controller=home&action=about">About</a></li>
      <li><a href="?controller=home&action=contact">Contact Us</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="?controller=home&action=profile&idmember=<?php echo $_SESSION['id']?>" role="button" ><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['nama']; ?></a></li>
      <li><a href="logout.php" role="button" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>
<!--banner-->
<img src="resources/image/huhu.png" style=" width: 100%">
 <div class="datata" style="width: 100%; left: 0px;">
    <h2>Inilah kisah mereka yang menemukan kebahagian mereka</h2>
    <hr>
          <div class="container">
            <div class="row">
            <?php foreach ($story as $data) {
              ?>
              <div class="col-3 readonly" style="float: left; margin: 10px;"> 
                <div class="isi">
                  <img src="images/<?php echo $data['gambar'] ?>" style="width: 150px; height: 150px; border-radius: 10px;">
                  <h3 style="color: white;">Nama Pemilik</h3>
                  <p style="color: white;"><?php echo $data['nama'] ?></p>
                  <hr><h5 style="color: white;">Peliharaan</h5>
                  <span style="font-size: 16px; color: white;"><?php echo $data['jenis'] ?></span>
                  <a href="?controller=story&action=detailreview&idstory=<?php echo $data['idstory'] ?>" class="btn btn-danger" role="button">Baca</a>
                </div>
              </div>
            <?php
            }
            ?>
            </div>
          </div>
  </div>

</body>
</html>