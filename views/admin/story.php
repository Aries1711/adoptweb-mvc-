<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="views/slide/guk.ico">
  <link rel="stylesheet" type="text/css" href="resources/assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="resources/assets/css/style.css">
  <style type="text/css">
      .cari{
        float: left;
      }

      .table-responsive{
        padding-top: 20px;
        width: 100%;
        font-size: 15px;
        /*margin: auto;*/
      }

      .paginate{
        text-align: center;
      }

      .pagination li a{
        cursor: pointer;
      }

      .hilang{
        display: none;
      } 
    </style>
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
        <li class="active"><a href="?controller=home&action=adminstory">Data Kisah</a></li> 
        <li><a href="?controller=home&action=adminask">Data Pertanyaan</a></li>  
      </ul>
      <ul class="nav navbar-nav navbar-right"> 
        <li><a><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['nama']; ?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </nav> 
  <!-- Tabel content-->
  <img src="resources/image/hehe.png" style=" width: 100%;" >
  <div class="dataad" style="top: 70px;">
    <h2 style="color: black;">Tulis Kisah.</h2>
    <table>
      <thead>
        <tr>
          <th>Id member</th>
          <th>Nama</th>
          <th>jenis hewan adopsi</th>
          <th>Gambar</th>
          <th>Kisah</th>
          <th>Aksi</th>
        </tr>  
      </thead>
      <tbody id="body-tab">
        <?php foreach ($story as $item) {

          ?>
          <tr>
            <td><?php echo $item['idstory'] ?></td>
            <td><?php echo $item['nama'] ?></td>
            <td><?php echo $item['jenis'] ?></td>
            <td><img src="images/<?php echo $item['gambar'] ?>" style="width: 50px; height: 50px; border-radius: 10px;"></td>
            <td><?php echo $item['kisah'] ?></td>
            <td>
              <button onclick=""><span class="glyphicon glyphicon-trash"></span></button>
              <button role="button" data-toggle="modal" data-target="#update-<?php echo $item['idstory'] ?>"><span class="glyphicon glyphicon-edit"></span></button>
            </td>

            <!-- modal -->
            <div id="update-<?php echo $item['idstory'] ?>" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Ubah Data Hewan</h4>
                  </div>
                  <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="controller" value="story">
                    <input type="hidden" name="action" value="ubahkisah">
                    <div class="modal-body">
                      <div class="form-group">
                       <input type="hidden" name="idstory" value="<?php echo $item['idstory']; ?>">
                       <label for="pwd">Nama:</label>
                       <input type="text" class="form-control" name="nama" value="<?php echo $item['nama'] ?>">
                     </div>
                     <div class="form-group">
                      <label for="pwd">Jenis:</label>
                      <input type="text" class="form-control" name="jenis" value="<?php echo $item['jenis'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Kisah:</label>
                      <input type="text" class="form-control" name="kisah" value="<?php echo $item['kisah'] ?>">
                    </div>
                    <div>
                      <label for="exampleFormControlFile1">Gambar Hewan</label>
                      <input name="foto_hewan" type="file" class="form-control" aria-describedby="basic-addon1" required>
                      <input class="btn btn-warning" type="submit" value="Masukkan" name="upload">
                    </div>
                  </form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </tr>
      <?php }  ?>
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
<!-- modal -->
<div id="tambah" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Data Kisah Baru</h4>
      </div>
      <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="controller" value="story">
        <input type="hidden" name="action" value="kisah">
        <div class="modal-body">
          <div class="form-group">
            <label for="pwd">Nama:</label>
            <input type="text" class="form-control" id="pwd" name="nama">
          </div>
          <div class="form-group">
            <label for="pwd">Jenis Hewan Adopsi:</label>
            <input type="text" class="form-control" id="pwd" name="jenis">
          </div>
          <div class="form-group">
            <label for="pwd">Kisah :</label>
            <input type="text" class="form-control" id="pwd" name="kisah">
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Gambar Hewan</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto_hewan" style=" border-radius: 10px; border-width: 0px;">
          </div>
          <input class="btn btn-warning" type="submit" value="Masukkan" name="upload">
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- -->

<script type="text/javascript" src="resources/assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="resources/assets/js/bootstrap.js"></script>
<script src="resources/assets/js/sideActive.js"></script>
<script>

  var total = <?php echo count($story) ?>;
  console.log(total);
  paginasi(total);


  function paginasi(total) {
    var limit = 3;
    var jml_page = Math.ceil(total / limit);
    console.log(jml_page);

    var gabung = "";
    for (var i = 1; i <= jml_page; i++) {
      gabung += '<li><a class="page" id="bt'+i+'">'+i+'</a></li>';
    }
    $('.pagination').html(gabung);


    $('#body-tab tr').attr('class','hilang');
    for (var i = 1; i <= limit; i++) {
      $('#body-tab tr:nth-child('+i+')').attr('class','tampil');
    }

    $('.pagination li:first-child').attr('class', 'active');

    $('.page').click(function(event) {
      var hal = $(this).text();
      console.log(hal);

      var offset = (hal-1)*limit;
      console.log('offset= '+offset);

      $('li.active').removeAttr('class');
      $(this).closest( "li" ).attr('class', 'active');

      $('#body-tab tr').attr('class','hilang');
        // var newLimit = 0;
        if ((total-offset) < limit) {
          // newLimit = total-offset;
          for (var i = offset+1; i <= total; i++) {
            $('#body-tab tr:nth-child('+i+')').attr('class','tampil');
          }
        }
        else{
          for (var i = offset+1; i <= offset+limit; i++) {
            $('#body-tab tr:nth-child('+i+')').attr('class','tampil');
          } 
        }

      });  
  }

</script>

</body>
</html>