<?php


class subject_db
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
		
		
		public function getAllSubject($year,$sem,$course)
		{
			$cnn=subject_db::connect();
			$sql="select * from subject_tbl where sub_year=".$year." && sub_semister=".$sem." && fk_course_name='".$course."' ";
			$res=$cnn->query($sql);
			return $res;
			subject_db::disconnect();
		
        }
}

?>		