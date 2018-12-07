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

    public static function daftar($nama,$notelp,$username,$password)
    {
        global $con;
        $level = 2;
        $sql = "call daftar('$nama','$notelp','$username','$password',$level)";
        $result = $con->query($sql);
        return $result;
    }
}

?>