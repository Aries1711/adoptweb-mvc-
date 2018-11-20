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
      <li><a href="?controller=home&action=adminverifikasi">Verifikasi Adopsi</a></li> 
      <li><a href="?controller=home&action=adminstory">Data Kisah</a></li> 
      <li class="active"><a href="?controller=home&action=adminask">Data Pertanyaan</a></li>  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['nama']; ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!-- Modal content-->
  <img src="resources/image/hehe.png" style=" width: 100%;" >
  <div class="paragrap">
      <h2>Data Pertanyaan.</h2>
      <hr>
      <div class="dataad">
        <table>
          <tbody>
          <tr>
            <th>Id ask</th>
            <th>Nama</th>
            <th>Alamat-email</th>
            <th>Pertanyaan</th>
            <th>Aksi</th>
          </tr>  
          <?php foreach ($ask as $data) {
            
            ?>
          <tr>
            <td><?php echo $data['idask'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['pertanyaan'] ?></td>
            <td>
                  <button type="button" style="border-radius: 10px;" >baca</button>
          </td>
          </tr>
          <?php }  ?>
          </tbody>
        </table>
        <hr>
        @adopsi
      </div>
  <!-- slide -->
  <script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
  
</body>
</html>