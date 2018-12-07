<?php

require_once('init.php');


class Story
{
	public static function create($nama,$jenis,$foto,$kisah)
	{
		global $con;
		$sql ="call kisah('$nama', '$jenis', '$foto', '$kisah')";
		$result = $con->query($sql);
		return $result;
	}
    public static function ubahstory($idstory,$nama,$jenis,$kisah,$foto)
    {
        global $con;
        $sql = "UPDATE story SET nama='$nama',jenis='$jenis',gambar='$foto',kisah='$kisah' WHERE idstory=".$idstory;
        $result = $con->query($sql);
        return $result;
    }

	public static function lihatstory()
	{
		
		global $con;
    	$list=[];
    	$sql = " SELECT * FROM story" ; 
    	$result =$con->query($sql);

    	if ($result-> num_rows > 0 ) {
    		while ( $row = $result-> fetch_assoc()) {
    			$list[]=array(
    				'idstory' =>$row['idstory'] ,
    				'nama' =>$row['nama'],
    				'jenis' =>$row['jenis'],
    				'gambar' =>$row['gambar'],
    				'kisah' =>$row['kisah']

    				 );
    		}
    	}

    	if (isset($list)) {
    		return $list;
    	}else{
    		return null;
    	}
	}

    public static function lihatreview($idstory)
    {
        global $con;
        $list =[];
        $sql=("SELECT * FROM story where idstory =".$idstory);
        $result =$con->query($sql);
        if ($result-> num_rows > 0 ) {
            while ( $row = $result-> fetch_assoc()) {
                $list[]=array(
                    'idstory' =>$row['idstory'] ,
                    'nama' =>$row['nama'],
                    'jenis' =>$row['jenis'],
                    'gambar' =>$row['gambar'],
                    'kisah' =>$row['kisah'],

                     );
            }
        }

        if (isset($list)) {
            return $list;
        }else{
            return null;
        }
    }
	

}

?>