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
			$sql="select * from notice_tbl";
			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		
		}
		
		public function getNoticeById($_id){

			$cnn=notice_db::connect();
			$sql="select * from notice_tbl where pk_notice_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		}
		
		public function getNotice($_address)
		{
			$cnn=notice_db::connect();
			$sql="select * from notice_tbl where notice_address='".$_address."'";
			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		
        }
    
        public function insertNotice($_id,$_title,$_desc,$_link,$_date,$_cnt,$_email,$_year,$_address)
		{
			$cnn=notice_db::connect();
			
			$sql="INSERT INTO notice_tbl VALUES (". $_id .",'" . $_title . "','" . $_desc . "','" . $_link . "','" . $_date . "',".$_cnt.",'" . $_email . "'," . $_year .  ",'".$_address."') ";
			
			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		
		}

		public function updateNotice($_id,$_title,$_desc,$_link,$_date,$_cnt,$_email,$_year,$_address)
		{
			
			$cnn=notice_db::connect();
			$sql="update notice_tbl set pk_notice_id=".$_id.",notice_title='".$_title."',notice_link='".$_link."',notice_start_date='".$_date."',notice_end_count=".$_cnt.",fk_email_id='".$_email."',notice_year=".$_year.",notice_address='".$_address."' where pk_notice_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		}
		
		
		public function deleteNotice($arr)
		{
			$cnn=notice_db::connect();
			$sql="delete from notice_tbl where pk_notice_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		}
	
		public function deleteNoticeOne($_id)
		{
			$cnn=notice_db::connect();
			$sql="delete from notice_tbl where pk_notice_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			notice_db::disconnect();
		}
}

?>