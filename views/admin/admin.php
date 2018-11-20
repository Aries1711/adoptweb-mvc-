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
      <li class="active"><a href="?controller=animal&action=homeAdmin">Data Adopsi</a></li>
      <li><a href="?controller=home&action=adminverifikasi">Verifikasi Adopsi</a></li> 
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
  <img src="resources/image/haha.png" style=" width: 100%;" >
    <div class="paragrap">
      <h2>Data Adopsi.</h2>
      <hr>
      <div class="dataad">
        <table>
          <tbody>
          <tr>
            <th>Id Hewan</th>
            <th>Jenis Hewan</th>
            <th>Umur</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>  
            <?php foreach ($lihat as $data) {
            
            ?>
          <tr>
            <td><?php echo $data['idhewan'] ?></td>
            <td><?php echo $data['jenis'] ?></td>
            <td><?php echo $data['umur'] ?></td>
            <td><?php echo $data['image'] ?></td>
            <td><?php echo $data['deskripsi'] ?></td>
            <td>
                  <button type="button" style="border-radius: 10px;" >Ubah</button>
                  <button type="button" style="border-radius: 10px;" >Hapus</button>
          </td>
          </tr>
          <?php }  ?>
          </tbody>
        </table>
      <div class="tombol">
        <a href="#tambah" class="btn btn-success" role="button" data-toggle="modal" style="margin-left: 10px; margin-bottom: 10px;">Tambah</a>
      </div>
      </div>
<!-- modal -->
<div id="tambah" class="modal fade" role="dialog">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Data Hewan Baru</h4>
      </div>
      <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="controller" value="animal">
        <input type="hidden" name="action" value="baru">
      <div class="modal-body">
        <div class="form-group">
        <label for="pwd">Jenis Hewan:</label>
          <input type="text" class="form-control" id="pwd" name="jenis">
      </div>
        <div class="form-group">
        <label for="pwd">Umur:</label>
          <input type="text" class="form-control" id="pwd" name="umur">
      </div>
      <div class="form-group">
        <label for="pwd">Deskripsi:</label>
          <input type="text" class="form-control" id="pwd" name="deskripsi">
      </div>
          <label for="exampleFormControlFile1">Gambar Hewan</label>
          <input name="foto_hewan" type="file" class="form-control" aria-describedby="basic-addon1"
            required>
      <input class="btn btn-warning" type="submit" value="Masukkan" name="upload">
      </div>
    </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <script type="text/javascript" src="resources/assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="resources/assets/js/bootstrap.js"></script>
  
</body>
</html>