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
}

?>
