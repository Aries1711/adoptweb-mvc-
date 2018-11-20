<?php

require_once 'init.php';


class Ask
{
	public static function buat($nama,$alamatemail,$pertanyaan){
		global $con;
		$sql ="call buat('$nama','$alamatemail','$pertanyaan')";
		$result = $con->query($sql);
		return $result;
	}
	public static function lihatAsk()
	{ 
		global $con;
    	$list=[];
    	$sql = " SELECT * FROM ask " ;
    	$result =$con->query($sql);

    	if ($result-> num_rows > 0 ) {
    		while ( $row = $result-> fetch_assoc()) {
    			$list[]=array(
    				'idask' =>$row['idask'] ,
    				'nama' =>$row['nama'],
    				'email' =>$row['email'],
    				'pertanyaan' =>$row['pertanyaan']

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