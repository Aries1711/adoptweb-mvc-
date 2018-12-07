<?php 


require_once('../init.php');


$page = isset($_GET['p'])?$_GET['p']:'';
      global $con;
  if ($page == 'del') {
        $id = $_GET['id'];
        $sql = ("DELETE FROM animal WHERE idhewan =".$id);
        $execute =$con->query($sql);
    // }elseif($page== 'edit'){
      // $id =$_POST['id'];
      // $jenis =$_POST['j']; 
      // $umur =$_POST['u'];
      // $deskripsi =$_POST['d'];
      
      // $sql ="UPDATE animal SET jenis='$jenis', umur='$umur' ,deskripsi='$deskripsi' WHERE idhewan='id'";
      // // $sql->bindParam(1,$jenis);
      // // $sql->bindParam(2,$umur);
      // // $sql->bindParam(3,$deskripsi);
      // // $sql->bindParam(4,$id);
      // $execute =$con->query($sql);


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
            	<td><?php echo $row['image'] ?></td>
            	<td><?php echo $row['deskripsi'] ?></td>
                <td>
                <button onclick="Hapus(<?php echo $row['idhewan'] ?>)"><span class="glyphicon glyphicon-trash"></span></button>
                <button role="button" data-toggle="modal" data-target="#update-<?php echo $row['idhewan'] ?>"><span class="glyphicon glyphicon-edit"></span></button>

                            <!-- Modal Content Update-->
              <div id="" class="modal fade" role="dialog">
                <input type="hidden" name="">
                <input type="hidden" name="">
                  <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Ubah Data Hewan</h4>
                  </div>
                  <form method="post" enctype="multipart/form-data">
                    <input type="hidden" id="<?php echo $row['idhewan'] ?>">
                  <div class="modal-body">
                    <div class="form-group">
                    <label for="pwd">Jenis Hewan:</label>
                      <input type="text" class="form-control" id="j-<?php echo $row['idhewan'] ?>" value="<?php echo $row['jenis'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Umur:</label>
                      <input type="text" class="form-control" id="u-<?php echo $row['idhewan'] ?>" value="<?php echo $row['umur'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Deskripsi:</label>
                      <input type="text" class="form-control" id="d-<?php echo $row['idhewan'] ?>" value="<?php echo $row['deskripsi'] ?>">
                  </div>
                  </div>
                  <label for="exampleFormControlFile1">Gambar Hewan</label>
                  <input name="foto_hewan" type="file" class="form-control" aria-describedby="basic-addon1" required>
                   <input class="btn btn-warning" type="submit" value="Masukkan" name="upload">
                    </div>
                  </div>
                    
                </form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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