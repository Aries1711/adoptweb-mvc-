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
              <td><?php echo $data['idadopsi'] ?></td>
              <td><?php echo $data['idmember'] ?></td>
              <td><?php echo $data['tanggal'] ?></td>
              <td><?php echo $data['tanggalkirim'] ?></td>
              <td><?php echo $data['status'] ?></td>
            <td>
                  <button type="button" style="border-radius: 10px;" ><span class="glyphicon glyphicon-ok-circle"></span></button>
                  <button type="button" style="border-radius: 10px;" ><span class="glyphicon glyphicon-remove-circle"></span></button>
          </td>
          <?php }  ?>
          </tr>
          </tbody>
        </table>
        <hr>
      </div>
  <script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
  
</body>
</html>