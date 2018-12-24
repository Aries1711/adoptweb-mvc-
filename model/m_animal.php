<?php

require_once('init.php');


class Animal
{
	public static function baru($jenis,$umur,$image,$deskripsi)
    {
        global $con;
        $sql = "call baru('$jenis','$umur','$image','$deskripsi')";
        $result = $con->query($sql);
        return $result;
    }

    public static function ubahadopsi($idhewan,$jenis,$umur,$image,$deskripsi)
    {
 
        global $con;
        $sql = "UPDATE animal SET jenis='$jenis',umur='$umur',image='$image',deskripsi='$deskripsi' WHERE idhewan=".$idhewan;
        $result = $con->query($sql);
        return $result;

    }

    public static function lihatAnimal()
    {
    	global $con;
    	$list=[]; 
        $sql = " SELECT * FROM animal where teradopsi=0" ;  
        $result =$con->query($sql);
   
        if ($result-> num_rows > 0 ) {
            while ( $row = $result-> fetch_assoc()) {
                $list[]=array(
                    'idhewan' =>$row['idhewan'] ,
                    'jenis' =>$row['jenis'],
                    'umur' =>$row['umur'],
                    'image' =>$row['image'],
                    'deskripsi' =>$row['deskripsi'],
                    'hewan' =>'semua',

                     );
            }
        
        }


        
 
    	if (isset($list)) {
    		return $list;
    	}else{
    		return null;
    	}
    }
    public static function lihatadopsi($idhewan)
    {
        global $con;
        $list=[];
        $sql = ("SELECT * FROM animal where idhewan =".$idhewan) ; 
        $result =$con->query($sql);

        if ($result-> num_rows > 0 ) {
            while ( $row = $result-> fetch_assoc()) {
                $list[]=array(
                    'idhewan' =>$row['idhewan'] ,
                    'jenis' =>$row['jenis'],
                    'umur' =>$row['umur'],
                    'image' =>$row['image'],
                    'deskripsi' =>$row['deskripsi'],

                     );
            }
        }

        if (isset($list)) {
            return $list;
        }else{
            return null;
        }

    }

    public static function lihatmakeadopsi()
    {
        global $con;
        $list=[];
        $sql = ("SELECT * FROM adopsi INNER JOIN users ON adopsi.id_member = users.id;  ") ; 
        $result =$con->query($sql);

        if ($result-> num_rows > 0 ) {
            while ( $row = $result-> fetch_assoc()) {
                $list[]=array(
                    'idadopsi' =>$row['id_adopsi'] ,
                    'nama' =>$row['nama'],
                    'idhewan' =>$row['idhewan'],
                    'tanggal' =>$row['tanggal'],
                    'tanggalkirim' =>$row['tanggalkirim'],
                    'status' =>$row['status verifikasi'],
                    'alasan' =>$row['alasan'],
                    'alamat' =>$row['alamat'],


                     );
        
        }

        if (isset($list)) {
            return $list;
        }else{
            return null;
        }

                                    }   
    }


    public static function makeadopsi($idmember,$idhewan,$tanggalkirim,$alasan,$alamat)
    {
      global $con;
      $tanggal1 =date('Y-m-d');
      $status ='Nonverifikasi';
    $sql = "call makeadopsi('$idmember','$idhewan','$tanggal1','$tanggalkirim','$status','$alasan','$alamat')";
        $result = $con->query($sql);
        return $result;   
    } 

    public static function terima($idadopsi,$verif,$idhewan)
    {
        global $con;
        $sql = "UPDATE adopsi SET `status verifikasi`='$verif' WHERE id_adopsi=".$idadopsi;
        $result = $con->query($sql);
        $sql1 = "UPDATE animal SET `teradopsi`= 1 WHERE idhewan=".$idhewan;
        $result = $con->query($sql1);
        return $result;
    }
    public static function tolak($idadopsi,$verif1)
    {
        global $con;
        $sql = "UPDATE adopsi SET `status verifikasi`='$verif1' WHERE id_adopsi=".$idadopsi;
        $result = $con->query($sql);
        return $result;
    }

}

?> 