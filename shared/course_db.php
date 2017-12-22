<?php


class course_db
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
		
		
		public function getAllCourse()
		{
			$cnn=course_db::connect();
			$sql="select * from course_tbl";
			$res=$cnn->query($sql);
			return $res;
			course_db::disconnect();
		
		}
	
}

?>