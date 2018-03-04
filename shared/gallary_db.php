<?php


class gallary_db
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
		
		
		public function getAllGallary()
		{
			$cnn=gallary_db::connect();
			$sql="select * from gallary_tbl";
			$res=$cnn->query($sql);
			return $res;
			gallary_db::disconnect();
		
		}
		
		public function getGallary($_id)
		{
			$cnn=gallary_db::connect();
			$sql="select * from gallary_tbl where pk_gallary_id ".$_id;
			$res=$cnn->query($sql);
			return $res;
			gallary_db::disconnect();
		
        }
    
        public function insertGallary($_id,$_type,$_album_id,$_title,$_url)
		{
			$cnn=gallary_db::connect();
			
			$sql="INSERT INTO gallary_tbl VALUES (". $_id ."," . $_type . "," . $_album_id . ",'" . $_title . "','" . $_url . "') ";
			
			$res=$cnn->query($sql);
			return $res;
			gallary_db::disconnect();
		
		}

		public function updateGallary($_id,$_type,$_album_id,$_title,$_url)
		{
			
			$cnn=gallary_db::connect();
			$sql="update gallary_tbl set pk_gallary_id=".$_id.",gallary_type=".$_type.",fk_album_id=".$_album_id.",gallary_title='".$_title."',gallary_url='".$_url."'  where pk_gallary_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			gallary_db::disconnect();
		}
		
		
		public function deleteGallary($arr)
		{
			$cnn=gallary_db::connect();
			$sql="delete from gallary_tbl where pk_gallary_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			gallary_db::disconnect();
		}

		public function deleteGallaryOne($_id)
		{
			$cnn=gallary_db::connect();
			$sql="delete from gallary_tbl where pk_gallary_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			gallary_db::disconnect();
		}
	
}

?>