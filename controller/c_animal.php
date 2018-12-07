<?php

/**
 * 
 */
class AnimalController
{ 
	  
	public function adopsi()
	{
		if (isset($_SESSION['user'])) { 
			$lihat=Animal::lihatAnimal();
            require_once('views/member/adopsi.php');
        } else {
            header('location:index.php?controller=login&action=login');
        }  
	}
	public function ubahadopsi()
	{
		if (isset($_SESSION['user'])) {
			$foto = $_FILES['foto_hewan']['name'];
			$tmp = $_FILES['foto_hewan']['tmp_name'];
			$path = "images/".$foto;
			if (move_uploaded_file($tmp, $path)) {
			$list = Animal::ubahadopsi($_POST['idhewan'], $_POST['jenis'], $_POST['umur'],$_POST['deskripsi'],$foto);
            header("location: index.php?controller=animal&action=homeAdmin");
        	}
        } else {
            header('location:index.php?controller=login&action=login');
        } 
	}
 
	public function adopsihewan() 
	{ 
		if (isset($_SESSION['user'])) {
			$lihat=Animal::lihatadopsi($_GET['idhewan']);
            require_once('views/member/adopsi1.php');
        } else {
            header('location:index.php?controller=login&action=login');
        } 
	}

	public function make()
	{
        $list = Animal::makeadopsi($_POST['idmember'],$_POST['idhewan'], $_POST['tanggalkirim'], $_POST['alasan'],$_POST['alamat']);
        ?>
                <script>
                    alert('Permintaan adopsi sedang di proses');
                </script>
                <?php
       require_once('views/member/home.php');
       ;	
	}

	public function baru()
	{
		$foto = $_FILES['foto_hewan']['name'];
		$tmp = $_FILES['foto_hewan']['tmp_name'];
		$path = "images/".$foto;
		if (move_uploaded_file($tmp, $path)) {
			$list = Animal::baru($_POST['jenis'], $_POST['umur'], $foto, $_POST['deskripsi']);
			?>
			<script>
				alert('Data berhasil di entry');
			</script>
			<?php
        header("location: index.php?controller=animal&action=homeAdmin");
		}
	}
	public function homeAdmin() 
	{
		if (isset($_SESSION['user'])) {
			require_once('views/admin/admin.php');
		}
		else{
			header('location:index.php?controller=login&action=login');
		}
	}

}


?>