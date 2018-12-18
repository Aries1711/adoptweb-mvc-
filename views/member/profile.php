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
        <li><a href="?controller=story&action=review">Review</a></li>  
        <li><a href="?controller=animal&action=adopsi">Adopsi</a></li>
        <li><a href="?controller=home&action=about">About</a></li>
        <li><a href="?controller=home&action=contact">Contact Us</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="?controller=home&action=profile&idmember=<?php echo $_SESSION['id']?>" role="button" ><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['nama']; ?></a></li>
        <li><a href="logout.php" role="button" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </nav>
  <!--banner-->
  <img src="resources/image/huhu.png" style=" width: 100%">
  <div class="datata" style="width: 100%; left: 0px;">

    <h2>Profile member</h2>
    <hr>

    <div class="container">
      <div class="row">
        <div class="col-md-4" style="background: rgba(255,255,255,.6); border-radius: 12px; padding: 15px;">
          <h2 style="color: black;">Informasi umum</h2>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <img src="resources/image/user.png" style="width: 100px; height: 100px;">
            </div>
            <div class="col-md-8">
              <?php foreach ($profil as $data) {
                ?>
                <h4>Nama</h4>
                <li style="color: white; font-size: 20px;"><?php echo $data['nama'] ?></li>
                <h4>Username</h4>
                <li style="color: white; font-size: 20px;"><?php echo $data['username'] ?></li>

              </div>
            </div>
          </div>
          <div class="col-md-8" style="background: white; border-radius: 4px; background: rgba(255,255,255,.1); color: white;"> Detail User
            <h3>No. Telepon</h3>
            <li style="color: white; font-size: 20px;"><?php if ($data['notelp'] == ''){ echo "Nomer telepone masih kosong";}
            echo $data['notelp']; {
        # code...
            } ?></li>
          </div>
        <?php } ?>

        <div class="col-md-8" style="background: white; border-radius: 4px; background: rgba(255,255,255,.5); color: white;">
          <h3>Log Pengajuan</h3>
          <hr>
          <table>
            <thead>
              <th>Id Hewan</th>
              <th>Tanggal Submit</th>
              <th>Tanggal Kirim</th>
              <th>Status</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <?php foreach ($adopsi as $item) {
                ?>
                <tr>
                  <td><?php echo $item['idhewan'] ?></td>
                  <td><?php echo $item['tanggal'] ?></td>
                  <td><?php echo $item['tanggalkirim'] ?></td>
                  <td><?php echo $item['status verifikasi'] ?></td>
                  <td> <?php if ($item['status verifikasi'] == 'Nonverifikasi'){ ?><button role="button" data-toggle="modal" data-target="#gagal-<?php echo $item['idadopsi'] ?>"><span class="glyphicon glyphicon-trash"></span></button>
                    <?php } ?>
                    <!--modal -->
                    <div id="gagal-<?php echo $item['idadopsi'] ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Apakah anda yakin ingin menghapus adopsi ini ?</h4>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                              <form method="post">
                                <input type="hidden" name="controller" value="home">
                                <input type="hidden" name="action" value="hapusadopsiuser">
                                <input type="hidden" name="idadopsi" value="<?php echo $item['idadopsi'] ?>">
                                <input type="hidden" name="idhewan" value="<?php echo $item['idhewan'] ?>">
                                <input class="btn btn-warning" type="submit" value="Yakin" name="upload">
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>

                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>

    <div class="tombol">

    </div>
  </div>
  <script type="text/javascript" src="resources/assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/bootstrap.js"></script>
  
</body>
</html>