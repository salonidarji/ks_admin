<?php


class staff_db
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
		
		
		public function getAllStaff()
		{
			$cnn=staff_db::connect();
			$sql="select * from staff_tbl";
			$res=$cnn->query($sql);
			return $res;
			staff_db::disconnect();
		
		}
		
		public function getStaff($_id)
		{
			$cnn=staff_db::connect();
			$sql="select * from staff_tbl where pk_staff_id ".$_id;
			$res=$cnn->query($sql);
			return $res;
			staff_db::disconnect();
		
        }
    
        public function insertStaff($_id,$_email,$_name,$_date,$_designation)
		{
			$cnn=staff_db::connect();
			
			$sql="INSERT INTO staff_tbl VALUES (". $_id .",'" . $_email. "','" . $_name . "','" . $_date . "','" . $_designation. "') ";
			
			$res=$cnn->query($sql);
			return $res;
			staff_db::disconnect();
		
		}

		public function updateStaff($_id,$_email,$_name,$_date,$_designation)
		{
			
			$cnn=staff_db::connect();
			$sql="update staff_tbl set pk_staff_id=".$_id.",fk_email_id='".$_email."',staff_name='".$_name."',staff_join_date='".$_date."',staff_designation='".$_designation."' where pk_staff_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			staff_db::disconnect();
		}
		
		
		public function deleteStaff($arr)
		{
			$cnn=staff_db::connect();
			$sql="delete from staff_tbl where pk_staff_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			staff_db::disconnect();
		}
	
}

?>