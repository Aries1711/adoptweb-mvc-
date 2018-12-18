<?php

 
class LoginController
{

    public function auth() 
    {
        if (Login::cekAkun($_POST['username'], $_POST['password']) == 0) {
            ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
                alert("Username / Password salah");
            </script>
            <?php
            require_once('views/home.php');
        } else if (Login::cekAkun($_POST['username'], $_POST['password']) == 1) {
            $_SESSION['user'] = $_POST['username'];
            header("Location:index.php?controller=animal&action=homeAdmin");
        } else if (Login::cekAkun($_POST['username'], $_POST['password']) == 2) {
            $_SESSION['user'] = $_POST['username'];
            header("Location:index.php?controller=home&action=homeMember");
        }  
    }
    public function daftar()
    {
        $user = Login::cekuser($_POST['username']);
        if (count($user) == 0) {
        $list = Login::daftar($_POST['nama'], $_POST['notelp'], $_POST['username'], $_POST['password']);
        // echo $_POST['username'].''.$_POST['notelp'].''.$_POST['nama'].''.$_POST['password'];
        ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
                alert("Akun sudah terbuat Silahkan login");
            </script>
            <?php
        // $_SESSION['user']= $_POST['username'];
     header("location: index.php?controller=home&action=homeMember");
        }else{
            ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
                alert("Username Sudah Ada, tolong gunakan yang lain");
            </script>
            <?php
            require_once('views/home.php');
        }
    }
}

?>  