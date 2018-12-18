<?php

require_once('init.php');


class User
{
	public static function lihatuser($id)
	{
		global $con;
        $list=[];
        $sql = ("SELECT * FROM users where id =".$id) ; 
        $result =$con->query($sql);

        if ($result-> num_rows > 0 ) {
            while ( $row = $result-> fetch_assoc()) {
                $list[]=array(
                    'id' =>$row['id'] ,
                    'level' =>$row['level'] ,
                    'nama' =>$row['nama'],
                    'notelp' =>$row['notelp'],
                    'username' =>$row['username'] 

                     );
            }
        }

        if (isset($list)) {
            return $list;
        }else{
            return null;
        }
	}
    public static function lihatadopsi($id)
    {
        global $con;
        $list=[];
        $sql = ("SELECT * FROM adopsi WHERE id_member=".$id) ; 
        $result =$con->query($sql);
        if ($result-> num_rows > 0 ) {
            while ( $row = $result-> fetch_assoc()) {
                $list[]=array(
                    'idadopsi'=>$row['id_adopsi'],
                    'idhewan' =>$row['idhewan'] ,
                    'tanggal' =>$row['tanggal'] ,
                    'tanggalkirim' =>$row['tanggalkirim'],
                    'status verifikasi' =>$row['status verifikasi']

                     );
            }
        }

        if (isset($list)) {
            return $list;
        }else{
            return null;
        }
    }

    public static function hapusadopsi($idadopsi,$idhewan)
    {
        global $con;
        $sql = ("DELETE FROM `adopsi` WHERE id_adopsi=".$idadopsi);
        echo $idadopsi;
        echo $idhewan;
        $result = $con->query($sql);
        $sql1 = ("UPDATE `animal` SET `teradopsi`=0 WHERE idhewan=".$idhewan);
        $result1 = $con->query($sql1);
        return $result1;

    }
}

?>
