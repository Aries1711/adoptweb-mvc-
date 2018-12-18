<?php


require_once 'init.php';

class Login
{

    public static function cekAkun($username, $password)
    { 
        global $con;
        $pass = $password;
        $sql = "select * from users where username = '$username' and password = '$pass'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            return $row['level'];
        } else {
            return 0;
        } 
    } 

    public static function cekuser($username)
    {
        global $con;
        $user=[];
        $sql = ("SELECT username FROM users where username ='$username'") ;
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ( $row = $result-> fetch_assoc()) {
                $user[]=array(
                    'username' =>$row['username']
                     );
            }
        }

        if (isset($user)) {
            return $user;
        }else{
            return null;
        }
    }

    public static function daftar($nama,$notelp,$username,$password)
    {
        global $con;
        $level = 2;
        $sql = "call daftar('$nama','$notelp','$username','$password',$level)";
        $result = $con->query($sql);
        $sql1 = "select * from users where username = '$username' and password = '$password'";
        $result1 = mysqli_query($con, $sql1);
        if (mysqli_num_rows($result1) > 0) {
            $row = mysqli_fetch_assoc($result1);
            $_SESSION['user'] =$row['username'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            return $row['level'];
        } else {
            return 0;
        }

        return $result;
    }
}

?>