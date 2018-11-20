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
      <a class="navbar-brand" href="#">Adopsi Hewan</a>
    </div> 
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#register" role="button" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#login" role="button" data-toggle="modal" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div> 
</nav>
<!-- Modal content-->
  <div id="login" class="modal fade" role="dialog">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
      </div>
      <form method="post">
        <input type="hidden" name="controller" value="login">
        <input type="hidden" name="action" value="auth">
      <div class="modal-body">
        <div class="form-group">
        <label for="pwd">Username:</label>
          <input type="text" class="form-control" id="pwd" name="username">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
          <input type="Password" class="form-control" id="pwd" name="password">
      </div>
      <input class="btn btn-warning" type="submit" value="Login" name="submit">
      </div>
    </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal content-->
 
<form method="post">
  <input type="hidden" name="controller" value="login">
  <input type="hidden" name="action" value="daftar">
  <div id="register" class="modal fade" role="dialog">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <label for="pwd">Nama:</label>
          <input type="text" class="form-control" id="pwd" name="nama">
      </div>
        <div class="form-group">
        <label for="pwd">No Telepon:</label>
          <input type="text" class="form-control" id="pwd" name="notelp">
      </div>
      <div class="form-group">
        <label for="pwd">Username:</label>
          <input type="text" class="form-control" id="pwd" name="username">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
          <input type="Password" class="form-control" id="pwd" name="password">
      </div>
            <input class="btn btn-default submit-button" type="submit" name="submit" value="Daftar">
      </div>
</form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!-- slide -->
  <img src="resources/image/haha.png" style=" width: 100%;" >
    <div class="paragrap">
      <h2>Bagaimana kita bisa menelantarkan hewan yang mau setia kepada kita.</h2>
      <h2>Mereka bukan aksesoris atau mainan</h2>
      <h2>Melainkan Sahabat.</h2>
      <div class="tombol">
        <a href="adopsi.html" class="btn btn-danger" role="button">Adopsi Sekarang</a>
      </div>
  </div>
  <div class="langkah">
    <h2>Langkah-langkah adopsi</h2>

  </div>
  <script type="text/javascript" src="resources/assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="resources/assets/js/bootstrap.js"></script>
  
</body>
</html>