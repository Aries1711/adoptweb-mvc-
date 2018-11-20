<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="resources/assets/css/style.css">
	<link rel="shortcut icon" href="resources/image/guk.ico">
  <link rel="stylesheet" type="text/css" href="resources/assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="resources/assets/css/style.css">
  <title>Adopsi Hewan</title>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Adopsi Hewan</a>  
    </div> 
    <ul class="nav navbar-nav"> 
      <li><a href="?controller=home&action=homeMember">Home</a></li>
      <li><a href="?controller=story&action=review">Review</a></li>
      <li class="active"><a href="?controller=animal&action=adopsi">Adopsi</a></li>
      <li><a href="?controller=home&action=about">About</a></li>
      <li><a href="?controller=home&action=contact">Contact Us</a></li> 
    </ul>
<ul class="nav navbar-nav navbar-right">
      <li><a href="#" role="button" ><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['nama']; ?></a></li>
      <li><a href="logout.php" role="button" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>
  <!-- slide -->
  <img src="resources/image/hehe.png" style=" width: 100%">
  <div class="datata" style="width: 100%; left: 0px;">
    <h2>Mereka Menunggu Anda</h2>
    <hr>
          <div class="container">
            <div class="row">
            <?php foreach ($lihat as $data) {
              ?>
              <div class="col-3 readonly" style="float: left; margin: 10px;"> 
                <div class="isi">
                  <img src="images/<?php echo $data['image'] ?>" style="width: 150px; height: 150px; border-radius: 10px;">
                  <p style="color: white;"><?php echo $data['jenis'] ?></p>
                  <p style="color: white;"><?php echo $data['umur'] ?></p>
                  <a href="?controller=animal&action=adopsihewan&idhewan=<?php echo $data['idhewan'] ?>" class="btn btn-danger" role="button">Adopsi</a>
                </div>
              </div>
            <?php
            }
            ?>
            </div>
          </div>
  </div>
  
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
</body>
</html>