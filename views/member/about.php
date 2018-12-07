<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="views/slide/guk.ico">
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
      <li><a href="?controller=animal&action=adopsi">Adopsi</a></li>
      <li class="active"><a href="?controller=home&action=about">About</a></li>
      <li><a href="?controller=home&action=contact">Contact Us</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="?controller=home&action=profile&idmember=<?php echo $_SESSION['id']?>" role="button" ><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['nama']; ?></a></li>
      <li><a href="logout.php" role="button" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>
  <!-- slide -->
<img src="resources/image/hehe.png" style=" width: 100%;" >
  <div class="paragrap">
    <h2>Menyelamatkan satu hewan sama dengan anda menyelamatkan 1 nyawa</h2>
    <hr>
      <h2>Kantor : Jln. Kalimantan no 10</h2>
      <h2>Jam buka : 08:00-21:00 WIB</h2>
      <h2>No Telp : 0331-48975</h2>
      <hr>
      <h2>Donasi dapat melalui no. Rekening berikut</h2>
      <h2>521539123987461</h2>
      <div class="tombol">
        <a href="?controller=animal&action=adopsi" class="btn btn-danger" role="button">Adopsi Sekarang</a>
      </div>
  </div>
  
	<script type="text/javascript src="asset/js/bootstrap.js"></script>
</body>
</html>