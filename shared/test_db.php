<?php


class test_db
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
		
		
		public function getAllTest()
		{
			$cnn=test_db::connect();
			$sql="select * from test_tbl";
			$res=$cnn->query($sql);
			return $res;
			test_db::disconnect();
		
		}

		public function getAllTestFaculty($email_faculty)
		{
			$cnn=test_db::connect();
			$sql="select * from test_tbl where faculty_email_id='".$email_faculty."' ";
			$res=$cnn->query($sql);
			return $res;
			test_db::disconnect();
		
		}
		
		
    
        public function insertTest($_id,$_email,$_correct_cnt,$_wrong_cnt,$_skip,$email_faculty)
		{
			$cnn=test_db::connect();
			$sql="INSERT INTO test_tbl VALUES (". $_id .",'" . $_email. "'," . $_correct_cnt . "," . $_wrong_cnt . ",".$_skip.",'".$email_faculty."') ";
			$res=$cnn->query($sql);
			return $res;
			test_db::disconnect();
		
		}

		
		
		public function deleteTest($arr)
		{
			$cnn=test_db::connect();
			$sql="delete from test_tbl where pk_test_id in ($arr)";
			$res=$cnn->query($sql);
			return $res;
			test_db::disconnect();
		}

		public function deleteTestOne($_id)
		{
			$cnn=test_db::connect();
			$sql="delete from test_tbl where pk_test_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			test_db::disconnect();
		}
	
}

?>