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
		
		public function getTest($_id)
		{
			$cnn=test_db::connect();
			$sql="select * from test_tbl where pk_test_id ".$_id;
			$res=$cnn->query($sql);
			return $res;
			test_db::disconnect();
		
        }
    
        public function insertTest($_id,$_email,$_correct_cnt,$_wrong_cnt)
		{
			$cnn=test_db::connect();
			$sql="INSERT INTO test_tbl VALUES (". $_id .",'" . $_email. "'," . $_correct_cnt . "," . $_wrong_cnt . ") ";
			$res=$cnn->query($sql);
			return $res;
			test_db::disconnect();
		
		}

		public function updateTest($_id,$_email,$_correct_cnt,$_wrong_cnt)
		{
			
			$cnn=test_db::connect();
			$sql="update test_tbl set pk_test_id=".$_id.",fk_email_id='".$_email."',test_correct_cnt=".$_correct_cnt.",test_wrong_cnt=".$_wrong_cnt." where pk_test_id=".$_id;
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
	
}

?>