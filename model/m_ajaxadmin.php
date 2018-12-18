<?php 


require_once('../init.php');


$page = isset($_GET['p'])?$_GET['p']:'';
global $con;
if ($page == 'del') {
  $id = $_GET['id'];
  $sql = ("DELETE FROM animal WHERE idhewan =".$id);
  $execute =$con->query($sql);

}else{
 $list=[]; 
 $sql = " SELECT * FROM animal " ;  
 $result =$con->query($sql);

 if ($result-> num_rows > 0 ) { 
  while ( $row = $result-> fetch_assoc()) {
   ?>
   <tr>

     <td><?php echo $row['idhewan'] ?></td>
     <td><?php echo $row['jenis'] ?></td>
     <td><?php echo $row['umur'] ?></td>
     <td><img src="images/<?php echo $row['image'] ?>" style="width: 50px; height: 50px; border-radius: 10px;"></td>
     <td><?php echo $row['deskripsi'] ?></td>
     <td>
      <?php if ($row['teradopsi'] == 1) {
        ?>
        <button role="button" data-toggle="modal" data-target="#update-<?php echo $row['idhewan'] ?>"><span class="glyphicon glyphicon-edit"></span></button>
      <?php }else{  ?>
        <button role="button" data-toggle="modal" data-target="#update-<?php echo $row['idhewan'] ?>"><span class="glyphicon glyphicon-edit"></span></button>
        <button onclick="Hapus(<?php echo $row['idhewan'] ?>)"><span class="glyphicon glyphicon-trash"></span></button>
      <?php } ?>

      <!-- Modal Content Update-->
      <div id="update-<?php echo $row['idhewan'] ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content"> 
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Hewan</h4>
            </div>
            <form method="post" enctype="multipart/form-data">
              <input type="hidden" name="controller" value="animal">
              <input type="hidden" name="action" value="ubahadopsi">
              <div class="modal-body">
                <div class="form-group">
                 <input type="hidden" name="idhewan" value="<?php echo $row['idhewan']; ?>">
                 <select name="jenis" class="form-control">
                  <option disabled selected>Pilih Jenis Hewan</option>
                  <option value="Anjing">Anjing</option>
                  <option value="Kucing">Kucing</option>
                  <option value="Marmut">Marmut</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pwd">Umur:</label>
                <input type="text" class="form-control" name="umur" value="<?php echo $row['umur'] ?>">
              </div>
              <div class="form-group">
                <label for="pwd">Deskripsi:</label>
                <input type="text" class="form-control" name="deskripsi" value="<?php echo $row['deskripsi'] ?>">
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
    <!-- Modal content-->

  </td>
</tr>

<?php
}
}

if (isset($list)) {
  return $list;
}else{
  return null;
}
}


?>