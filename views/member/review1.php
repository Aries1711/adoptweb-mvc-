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
      <li><a href="?controller=home&action=homeMember">Home</a></li>
      <li class="active"><a href="?controller=animal&action=review">Review</a></li> 
      <li><a href="?controller=animal&action=adopsi">Adopsi</a></li>
      <li><a href="?controller=home&action=about">About</a></li>
      <li><a href="?controller=home&action=contact">Contact Us</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right"> 
      <li><a href="#" role="button" ><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['nama']; ?></a></li>
      <li><a href="logout.php" role="button" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
    </ul>
  </div>
</nav>
  <!-- slide -->
  <img src="resources/image/huhu.png" style=" width: 100%;" >
  <div class="form" style="top: 350px;">
      <h2>Silahkan Hubungi Kami Untuk Informasi Lebih Lanjut</h2>
      <hr>
      <?php foreach ($story as $data) {
              ?>
      <table>
        <tr>  
        <td colspan="2">
    <div class="form-group">
        <label for="usr">Nama Pemilik: </label>
          <input readonly type="text" class="form-control" id="usr" placeholder="" value="<?php echo $data['nama'] ?>">
  </div>
        </td>
          </tr>
          <tr>
            <td>
      <div class="form-group">
        <label for="pwd">Jenis Hewan:</label>
          <input readonly type="text" class="form-control" id="pwd" placeholder="" value="<?php echo $data['jenis'] ?>">
      </div>
    </td>
    <td>
        <div class="form-group">
        <label for="pwd">Gambar:</label>
      </div>
    </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="form-group">
  <label for="comment">Cerita:</label>
  <textarea readonly class="form-control" rows="5" id="comment"><?php echo $data['kisah'] ?></textarea>
            </div>
          </td>
        </tr>
      </table>
      <div class="leftform" style="top: 100px; height: 300px;">
      <h2 style="color: white;">Detail Peliharaan</h2>
      <hr>
      <img src="images/<?php echo $data['gambar'] ?>" style="width: 200px; height: 200px; border-radius: 10px;">
    </div>
      <?php
            }
            ?>
  </div>    
  
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
</body>
</html>