<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="resources/image/guk.ico">
  <link rel="stylesheet" type="text/css" href="resources/assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="resources/assets/css/style.css">
	<title>Contact Us</title>
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
      <li><a href="?controller=story&action=review">Review</a></li> 
      <li><a href="?controller=animal&action=adopsi">Adopsi</a></li>
      <li><a href="?controller=home&action=about">About</a></li>
      <li class="active"><a href="?controller=home&action=contact">Contact Us</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="?controller=home&action=profile&idmember=<?php echo $_SESSION['id']?>" role="button" ><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['nama']; ?></a></li>
      <li><a href="logout.php" role="button" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>
<!-- banner -->
<img src="resources/image/hehe.png" style=" width: 100%;" >
    <div class="paragrap">
      <h2>Silahkan Hubungi Kami Untuk Informasi Lebih Lanjut</h2>
      <hr>
      <h2> @Telepon : 0331-48975</h2>
      <hr>
      <div class="tombol">
        <a href="?controller=animal&action=adopsi" class="btn btn-danger" role="button">Adopsi Sekarang</a>
      </div>
      <form method="post">
        <input type="hidden" name="controller" value="home">
        <input type="hidden" name="action" value="tanya">
      <div class="formform">
        <h2 style="color: white;">Pertanyaan</h2>
    <div class="form-group">
        <label for="usr">Name:</label>
          <input type="text" class="form-control" id="usr" name="nama">
  </div>
  <div class="form-group">
        <label for="pwd">Alamat Email:</label>
          <input type="text" class="form-control" id="pwd" name="alamatemail">
      </div>
      <div class="form-group">
        <label for="pwd">Pertanyaan:</label>
          <input type="text" class="form-control" id="pwd" name="pertanyaan">
      </div>
      <input class="btn btn-warning" type="submit" value="Tanyakan" name="submit">
  </div>
      </form>
  </div>
</body>
</html>