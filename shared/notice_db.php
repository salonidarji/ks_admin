<?php


class notice_db
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
		
		
		public function getAllNotice()
		{
			$cnn=notice_db::connect();
			$sql="select * from notice_tble";
			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		
		}
		
		public function getNotice($_id)
		{
			$cnn=notice_db::connect();
			$sql="select * from notice_tble where pk_notice_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		
        }
    
        public function insertNotice($_id,$_title,$_desc,$_link,$_date,$_cnt,$_email,$_year)
		{
			$cnn=notice_db::connect();
			
			$sql="INSERT INTO notice_tble VALUES (". $_id .",'" . $_title . "','" . $_desc . "','" . $_link . "','" . $_date . "',".$_cnt.",'" . $_email . "'," . $_year .  ") ";
			
			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		
		}

		public function updateNotice($_id,$_title,$_desc,$_link,$_date,$_cnt,$_email,$_year)
		{
			
			$cnn=notice_db::connect();
			$sql="update notice_tble set pk_notice_id=".$_id.",notice_title='".$_title."',notice_link='".$_link."',notice_start_date='".$_date."',notice_end_count=".$_cnt.",fk_email_id='".$_email."',notice_year=".$_year." where pk_notice_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		}
		
		
		public function deleteNotice($arr)
		{
			$cnn=notice_db::connect();
			$sql="delete from notice_tble where pk_notice_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		}
	
}

?>