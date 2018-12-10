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
      <a class="navbar-brand" href="#">@Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="?controller=animal&action=homeAdmin">Data Adopsi</a></li>
      <li class="active"><a href="?controller=home&action=adminverifikasi">Verifikasi Adopsi</a></li> 
      <li><a href="?controller=home&action=adminstory">Data Kisah</a></li> 
      <li><a href="?controller=home&action=adminask">Data Pertanyaan</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['nama']; ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav> 
  
  <!-- slide -->
<!-- table content-->
  <img src="resources/image/hehe.png" style=" width: 100%;" >
  <div class="dataad" style="top: 70px;">
      <h2 style="color: black;">Data Permintaan Verifikasi</h2>
      <hr>
        <table>
          <thead>
          <tr>
            <th>ID member</th>
            <th>ID Hewan</th>
            <th>Tanggal submit</th>
            <th>Tanggal kirim</th>
            <th>Status Status</th>
            <th>Aksi</th>
          </tr>  
          </thead>
          <tbody>
            <?php foreach ($adopsi as $data) {
            
            ?>
          <tr>
              <td><?php echo $data['idmember'] ?></td>
              <td><?php echo $data['idhewan'] ?></td>
              <td><?php echo $data['tanggal'] ?></td>
              <td><?php echo $data['tanggalkirim'] ?></td>
              <td><?php echo $data['status'] ?></td>
            <td>
              <?php
              if ($data['status'] == 'Nonverifikasi') {
                ?>
                  <button role="button" data-toggle="modal" data-target="#verif-<?php echo $data['idadopsi'] ?>"><span class="glyphicon glyphicon-ok-circle"></span></button>
              <?php
              }
              ?>
          </td>

          <!--modal -->
          <div id="verif-<?php echo $data['idadopsi'] ?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Apakah anda yakin ingin memverifikasi adopsi ini ?</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                  <form method="post">
                       <input type="hidden" name="idadopsi" value="<?php echo $data['idadopsi']; ?>">
                       <input type="hidden" name="verif" value="Terverifikasi">
                       <input type="hidden" name="idhewan" value="<?php echo $data['idhewan']; ?>">
                <input type="hidden" name="controller" value="animal">
                <input type="hidden" name="action" value="terima">
                      <input class="btn btn-warning" type="submit" value="Yakin" name="upload">
                </form>
                    <form method="post">
                      <input type="hidden" name="idadopsi" value="<?php echo $data['idadopsi']; ?>">
                      <input type="hidden" name="verif1" value="Tertolak">
                <input type="hidden" name="controller" value="animal">
                <input type="hidden" name="action" value="tolak">
                      <input type="submit" class="btn btn-default" value="Tolak" name="tolak">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>  
                </div>
              </div>
          </tr>
          <?php }  ?>
          </tbody>
        </table>
      
      </div>
          </tr>
          </tbody>
        </table>
        <hr>
      </div>
  <script type="text/javascript" src="resources/assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/bootstrap.js"></script>
  
</body>
</html>