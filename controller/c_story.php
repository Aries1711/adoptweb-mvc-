<?php

/**
 * ''
 */
class StoryController
{ 
	
	public function review()
	{
		$story=Story::lihatstory();
		if (isset($_SESSION['user'])) {
            require_once('views/member/review.php');
        } else {
            header('location:index.php?controller=home&action=home');
        }
	}
	public function detailreview()
	{
		$story=Story::lihatreview($_GET['idstory']);
		if (isset($_SESSION['user'])) {
            require_once('views/member/review1.php');
        } else {
            header('location:index.php?controller=home&action=home');
        }
	}
	public function kisah()
    {
        if (isset($_POST['nama'])) {
            $nama =$_POST['nama'];
        }
        if (isset($_POST['jenis'])) {
            $jenis =$_POST['jenis'];
        }
        if (isset($_POST['kisah'])) {
            $kisah =$_POST['kisah'];
        }
        $foto = $_FILES['foto_hewan']['name'];
        $tmp = $_FILES['foto_hewan']['tmp_name'];
        $path = "images/".$foto;
            if (!empty($nama) && !empty($jenis) && !empty($kisah)) {
                if (move_uploaded_file($tmp, $path)) {
                $list = Story::create($nama, $jenis, $foto, $kisah);
                }
                ?>
                <script>
                    alert('Data story baru telah di tambah!');
                </script>
                <?php
                header("location: index.php?controller=home&action=adminstory");
            }else{
                ?>
                <script>
                    alert('Ada Field Kosong');
                </script>
                <?php
                require_once('views/admin/story.php');
        }

    }


}
?>