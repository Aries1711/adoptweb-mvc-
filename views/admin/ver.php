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
  <div class="paragrap">
      <h2>Persetujuan Verifikasi.</h2>
      <hr>
      <div class="dataad">
        <table>
          <tbody>
          <tr>
            <th>Jenis Hewan</th>
            <th>Umur</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Status verifikasi</th>
            <th>Aksi</th>
          </tr>  
          <tr>
            <td>Kucing</td>
            <td>12 Bulan</td>
            <td>Img;1kucing.png</td>
            <td>kucing ini gemukkkkk</td>
            <td>Nonverif</td>
            <td>
                  <button type="button" style="border-radius: 10px;" >Verifikasi</button>
          </td>
          </tr>
          <tr>
            <td>Anjing</td>
            <td>14 bulan</td>
            <td>Img;1anjing.png</td>
            <td>Anjing ini berbentuk kotak</td>
            <td>Nonverif</td>
            <td>
                  <button type="button" style="border-radius: 10px;" >Verifikasi</button>
            </td>
          </tr>
          <tr>
            <td>Badak</td>
            <td>14 bulan</td>
            <td>Img;1Badak.png</td>
            <td>Badak ini berbentuk Anjing</td>
            <td>Nonverif</td>
            <td>
                  <button type="button" style="border-radius: 10px;" >Verifikasi</button>
            </td>
          </tr>
          </tbody>
        </table>
        <hr>
      </div>
  <script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
  
</body>
</html>