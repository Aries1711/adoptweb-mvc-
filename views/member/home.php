<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
      <li class="active"><a href="?controller=home&action=homeMember">Home</a></li>
      <li><a href="?controller=story&action=review">Review</a></li>  
      <li><a href="?controller=animal&action=adopsi">Adopsi</a></li>
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
  <img src="resources/image/haha.png" style=" width: 100%;" >
    <div class="paragrap">
      <h2>Bagaimana kita bisa menelantarkan hewan yang mau setia kepada kita.</h2>
      <h2>Mereka bukan aksesoris atau mainan</h2>
      <h2>Melainkan Sahabat.</h2>
      <div class="tombol">
        <a href="?controller=animal&action=adopsi" class="btn btn-danger" role="button">Adopsi Sekarang</a>
      </div>
  </div>
  <div class="langkah">
    <h2>Langkah-langkah adopsi</h2>

  </div>
  <script type="text/javascript" src="resources/assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/bootstrap.js"></script>
</body>
</html>