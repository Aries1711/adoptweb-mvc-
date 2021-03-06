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
      <li><a href="?controller=home&action=profile&idmember=<?php echo $_SESSION['id']?>" role="button" ><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['nama']; ?></a></li>
      <li><a href="logout.php" role="button" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
    </ul>
  </div>
</nav>
  <!-- slide -->
  <img src="resources/image/hehe.png" style=" width: 100%;" >
  <div class="form" style="top: 410px;">
<form method="post">
  <input type="hidden" name="controller" value="animal">
  <input type="hidden" name="action" value="make">
    <?php foreach ($lihat as $item) {

            ?>
  
  <h2> Silahkan Masukkan data pribadi anda</h2>

      <hr>
      <table>
          <tr>
            <td>
      <div class="form-group">
        <label for="pwd">Username:</label>
          <input readonly type="text" class="form-control" id="pwd" placeholder="" value="<?php echo $_SESSION['nama']; ?>">
          <input type="hidden" name="idmember" value="<?php echo $_SESSION['id']; ?>">
      </div>
            </td>
            <td>
      <div class="form-group">
        <label for="pwd">Jenis Hewan:</label>
          <input readonly type="text" class="form-control" id="pwd" placeholder="" value="<?php echo $item['jenis']; ?>">
          <input type="hidden" name="idhewan" value="<?php echo $item['idhewan']; ?>">
      </div>
    </td>
          </tr>
          <tr>
            <td colspan="2">
      <div class="form-group">
        <label for="pwd">Umur Hewan:</label>
          <input readonly type="text" class="form-control" id="pwd" placeholder="" value="<?php echo $item['umur']; ?>">
      </div>
    </td>
          </tr>
          <tr>
            <td colspan="2">
        <div class="form-group">
        <label for="pwd">Alamat Rumah Alternatif:</label>
          <input type="text" class="form-control" id="pwd" name="alamat">
      </div>
    </td>
        </tr>
      <tr>
            <td colspan="2">
      <div class="form-group">
        <label for="pwd">Tanggal permintaan pengiriman:</label>
          <input type="date" class="form-control" id="pwd" name="tanggalkirim">
      </div>
    </td>
      </tr>
        <tr>
            <td colspan="2">
      <div class="form-group">
        <label for="pwd">Alasan adopsi:</label>
          <input type="text" class="form-control" id="pwd" name="alasan">
      </div>
    </td>
      </tr>
      </table>
      <input class="btn btn-danger" type="submit" value="Adopsi Sekarang" name="submit">
    <div class="leftform" style="top: 100px;">
      <h2 style="color: white;">Detail Calon Peliharaan</h2>
      <hr>
      <img src="images/<?php echo $item['image'] ?>" style="width: 250px; height: 250px; border-radius: 10px;">
      <hr>
      <div class="form-group">
  <label for="comment">Deskripsi:</label>
  <textarea readonly class="form-control" rows="5" id="comment"><?php echo $item['deskripsi']; ?></textarea>
      </div>
    </div>
  </div>
</form>

  <?php } ?>    
  
  <script type="text/javascript" src="resources/assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/bootstrap.js"></script>
  <script>

    jQuery(document).ready(function(){
      $('input[name="submit"]').on("click", function (event) {
        event.preventDefault();

        var tanggalkirim = new Date($('input[name="tanggalkirim"]').val());
        var today = new Date();

        if (tanggalkirim.getTime() < today.getTime()) {
          alert("Tanggal kirim mohon melebihi tanggal sekarang");
          stop();
        }
        else{
          $('input[name="submit"]').off("click").trigger("click");
        }

      });
    });
    

  </script>
</body>
</html>