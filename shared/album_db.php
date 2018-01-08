<?php


class album_db
{
	private static $con=null;
		public static function connect()
		{
			self::$con=mysqli_connect('localhost','root','','ks_admin_db');
			return self::$con;
		}
		
		public static function disconnect()
		{
			mysqli_close(self::$con);
			self::$con=null;
		}
		
		
		public function getAllAlbum()
		{
			$cnn=album_db::connect();
			$sql="select * from album_tbl";
			$res=$cnn->query($sql);
			return $res;
			album_db::disconnect();
		
		}
		
		public function getAlbum($_id)
		{
			$cnn=album_db::connect();
			$sql="select * from album_tbl where pk_album_id ".$_id;
			$res=$cnn->query($sql);
			return $res;
			album_db::disconnect();
		
        }

        public function insertAlbum($_id,$_name)
		{
			$cnn=album_db::connect();
			
			$sql="INSERT INTO album_tbl VALUES (". $_id .",'" . $_name . "') ";
			
			$res=$cnn->query($sql);
			return $res;
			album_db::disconnect();
		
		}

		public function updateAlbum($_id,$_name)
		{
			
			$cnn=album_db::connect();
			$sql="update album_tbl set pk_album_id=".$_id.",album_name='".$_name."' where pk_album_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			album_db::disconnect();
		}

		public function deleteAlbumOne($_id)
		{
			$cnn=album_db::connect();
			$sql="delete from album_tbl where pk_album_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			album_db::disconnect();
		}
		
		
		public function deleteAlbum($arr)
		{
			$cnn=album_db::connect();
			$sql="delete from album_tbl where pk_album_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			album_db::disconnect();
		}
	
    
      
}

?>