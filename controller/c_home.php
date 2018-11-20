<?php


class HomeController
{
    public function home()
    { 
        require_once('views/home.php');
    }  

    public function adminverifikasi()
    { 
     if (isset($_SESSION['user'])) {
            require_once('views/admin/ver.php');
        } else {
            header('location:index.php?controller=home&action=home');
        }
    }

    public function adminstory()
    {
        $story=Story::lihatstory();
     if (isset($_SESSION['user'])) {
            require_once('views/admin/story.php');
        } else {
            header('location:index.php?controller=home&action=home');
        }
    }
    public function adminask()
    {
        $ask=Ask::lihatAsk();
     if (isset($_SESSION['user'])) {
            require_once('views/admin/ask.php');
        } else {
            header('location:index.php?controller=home&action=home');
        }
    }

    public function homeMember() 
    {
        if (isset($_SESSION['user'])) {
            require_once('views/member/home.php');
        } else {
            header('location:index.php?controller=home&action=home');
        }
    }

    public function about()
    {
        if (isset($_SESSION['user'])) {
            require_once('views/member/about.php');
        } else {
            header('location:index.php?controller=home&action=home');
        }
    }
    public function contact()
    {
        if (isset($_SESSION['user'])) {
            require_once('views/member/contact.php');
        } else {
            header('location:index.php?controller=home&action=home');
        }
    }

    public function tanya()
    {
        if (isset($_POST['nama'])) {
            $nama = $_POST['nama'];
        }
        if (isset($_POST['alamatemail'])) {
            $email = $_POST['alamatemail'];
        }
        if (isset($_POST['pertanyaan'])) {
            $pertanyaan = $_POST['pertanyaan'];
        }
            if (!empty($nama) && !empty($email) && !empty($pertanyaan)) {
                $list = Ask::buat($_POST['nama'], $_POST['alamatemail'], $_POST['pertanyaan']);
                ?>
                <script>
                    alert('Pertanyaan Sedang di ajukan silahkan tunggu balasan pada Email anda');
                </script>
                <?php
                require_once('views/member/home.php');
            }else{
                ?>
                <script>
                    alert('Ada Field Kosong');
                </script>
                <?php
                require_once('views/member/contact.php');
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
                require_once('views/admin/story.php');
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