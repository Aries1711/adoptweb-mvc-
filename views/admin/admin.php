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
<body onload="LihatData()"> 
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
  <img src="resources/image/hehe.png" style=" width: 100%;">
  <div class="dataad" style="top: 70px;">
    <h2 style="color: black;">Data Adopsi.</h2>
    <hr>
    <table>
      <thead>
        <tr>
          <th>Id Hewan</th>
          <th>Jenis Hewan</th>
          <th>Umur</th>
          <th>Gambar</th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>  
      </thead>
      <tbody id="body-tab">

      </tbody>
    </table>
    <div class="paginate">
      <nav aria-label="Page navigation">
        <ul class="pagination">

        </ul>
      </nav>
    </div>
    <div class="tombol">
      <a href="#tambah" class="btn btn-success" role="button" data-toggle="modal" style="margin-left: 10px; margin-bottom: 10px;">Tambah</a>
    </div>
  </div>
  <!-- Modal Tambah Data-->
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

              <select name="jenis" class="form-control">
                <option disabled selected>Pilih Jenis Hewan</option>
                <option value="Anjing">Anjing</option>
                <option value="Kucing">Kucing</option>
                <option value="Marmut">Marmut</option>
              </select>
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
  <script src="resources/assets/js/sideActive.js"></script>

  <script >
    function LihatData(){
      $.ajax({
        type: "GET",
        url: "model/m_ajaxadmin.php",
        success: function(data){
          $('tbody').html(data)
        }
      })

    }

    function Hapus(str){
      var id =str;
      $.ajax({
        type: "get",
        url : "model/m_ajaxadmin.php?p=del",
        data :"id="+id,
        success : function(data){
          LihatData();
        }
      })
      ;
    }

    function Update(str){
      var id=str;
      var jenis=$('#j-'+str).val();
      var umur=$('#u-'+str).val();
      var desk=$('#d-'+str).val();

      $.ajax({
        type:'POST',
        url : "model/m_ajaxadmin.php?p=edit",
        data: "j=" +jenis+ "&u=" +umur+ "&d=" +desk+ "id="+id,
        success: function(data){
          LihatData();
          console.log("complete");

        }

      });

    }


  </script>
  
</body>
</html>