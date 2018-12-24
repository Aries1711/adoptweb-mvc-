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


        if (!empty($_POST['nama']) && !empty($_POST['notelp']) && !empty($_POST['username']) && !empty($_POST['password'])){
            $user = Login::cekuser($_POST['username']);
            if (count($user) == 0) {
                $list = Login::daftar($_POST['nama'], $_POST['notelp'], $_POST['username'], $_POST['password']);
                ?>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script>
                    alert("Akun sudah terbuat Silahkan login");
                </script>
                <?php
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
        }else{
            ?>
        <script>
            alert('Ada Field Kosong');
        </script>
        <?php
        require_once('views/home.php');
        }
    }
}

?>  