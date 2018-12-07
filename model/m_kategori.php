<?php

require_once('../init.php');
		$hewan=$_POST['request'];
		if ($hewan=='Semua') {
		$sql = (" SELECT * FROM animal") ; 
        $result =$con->query($sql);
        if ($result-> num_rows > 0 ) {
                echo "<table>";
            while ( $row = $result-> fetch_assoc()) {
            	echo "<td>";
              echo '<div class="col-3 readonly" style="float: left; margin: 10px;">'; 
              echo '<div class="isi" style=" width: 150px; height: 150px;">';
              echo '<img src="images/'.$row['image'].' " style="width: 100px; height: 100px; border-radius: 10px;">';
              echo '<p style="color: white;">'.$row['jenis'].'</p>';
                  echo '<p style="color: white;">'.$row['umur'].'</p>';
                  echo '<a href="?controller=animal&action=adopsihewan&idhewan='.$row['idhewan'].'" class="btn btn-danger" role="button">Adopsi</a>';
                echo'</div>';
              echo'</div>';
                  echo '</td>';

            }
            echo "</table>";
        }
		}else{	
        $sql = (" SELECT * FROM animal where jenis='$hewan'") ; 
        $result =$con->query($sql);
        if ($result-> num_rows > 0 ) {
                echo "<table>";
            while ( $row = $result-> fetch_assoc()) {
            	echo "<td>";
              echo '<div class="col-3 readonly" style="float: left; margin: 10px;">'; 
              echo '<div class="isi" style=" width: 150px; height: 150px;">';
              echo '<img src="images/'.$row['image'].' " style="width: 100px; height: 100px; border-radius: 10px;">';
              echo '<p style="color: white;">'.$row['jenis'].'</p>';
                  echo '<p style="color: white;">'.$row['umur'].'</p>';
                  echo '<a href="?controller=animal&action=adopsihewan&idhewan='.$row['idhewan'].'" class="btn btn-danger" role="button">Adopsi</a>';
                echo'</div>';
              echo'</div>';
                  echo '</td>';

            }
            echo "</table>";
        }
		}

?>
