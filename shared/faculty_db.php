<?php
class faculty_db
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
		
		
		public function getAllFaculty()
		{
			$cnn=faculty_db::connect();
			$sql="select * from faculty_tbl";
			$res=$cnn->query($sql);
			return $res;
			faculty_db::disconnect();
		
		}
		
		public function getFaculty($_id)
		{
			$cnn=faculty_db::connect();
			$sql="select * from faculty_tbl where pk_faculty_id ".$_id;
			$res=$cnn->query($sql);
			return $res;
			faculty_db::disconnect();
		
        }
    
        public function insertFaculty($_email,$_name,$_id,$_date,$_img,$_course,$_resume,$_degree)
		{
			$cnn=faculty_db::connect();
			
			$sql="INSERT INTO faculty_tbl VALUES ('".$_email."','".$_name."',".$_id.",'".$_date."','".$_img."','".$_course."','".$_resume."','".$_degree."' ) ";
			
			$res=$cnn->query($sql);
			return $res;
			faculty_db::disconnect();
		
		}
		public function updateFaculty($_email,$_name,$_id,$_date,$_img,$_course,$_resume,$_degree)
		{
			
			$cnn=faculty_db::connect();
			$sql="update faculty_tbl set fk_email_id='".$_email."',faculty_name='".$_name."', pk_faculty_id=".$_id.",faculty_join_date='".$_date."',faculty_img='".$_img."',faculty_course='".$_course."',faculty_resume='".$_resume."',faculty_degree='".$_degree."'  where pk_faculty_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			faculty_db::disconnect();
		}
		
		
		public function deleteFaculty($arr)
		{
			$cnn=faculty_db::connect();
			$sql="delete from faculty_tbl where pk_faculty_id in ($arr)";
			$res=$cnn->query($sql);
			return $res;
			faculty_db::disconnect();
		}
		public function deleteFacultyOne($_id)
		{
			$cnn=faculty_db::connect();
			$sql="delete from faculty_tbl where pk_faculty_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			faculty_db::disconnect();
		}
	
}
?>