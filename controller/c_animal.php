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

	public function adopsihewan()
	{
		if (isset($_SESSION['user'])) {
			$lihat=Animal::lihatadopsi($_GET['idhewan']);
            require_once('views/member/adopsi1.php');
        } else {
            header('location:index.php?controller=login&action=login');
        } 
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
				alert('Alhamdulillah');
			</script>
			<?php
        header("location: index.php?controller=animal&action=homeAdmin");
		}
	}
	public function homeAdmin() 
	{
		if (isset($_SESSION['user'])) {
			
			$lihat=Animal::lihatAnimal();
			require_once('views/admin/admin.php');
		}
		else{
			header('location:index.php?controller=login&action=login');
		}
	}

}


?>