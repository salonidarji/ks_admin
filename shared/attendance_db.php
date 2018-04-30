<?php


class attendance_db
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
		
		public function getAllDate()
		{
			$cnn=attendance_db::connect();
			
			$sql="select distinct date from attendance_tbl";
			
			$res=$cnn->query($sql);
			return $res;
		    student_db::disconnect();
		
		}

		
		public function getAttendanceRno($rno,$email)
		{
			$cnn=attendance_db::connect();
			
			$sql="select * from attendance_tbl where fk_email_id='".$email."' && fk_stu_rno=".$rno;
			
			$res=$cnn->query($sql);
			return $res;
		    student_db::disconnect();
		
		}

		public function getAllAttendance($_date,$_email)
		{
			$cnn=attendance_db::connect();
			
			$sql="select * from attendance_tbl where date='".$_date."' && fk_email_id='".$_email."' ";
			
			$res=$cnn->query($sql);
			return $res;
		    student_db::disconnect();
		
		}

        public function insertAttendance($a_id,$rno,$date,$year,$email,$status)
		{
			$cnn=attendance_db::connect();
			
			$sql="INSERT INTO attendance_tbl VALUES (".$a_id.",'".$rno."','".$date."',".$year.",'".$email."','".$status."')";
			
			$res=$cnn->query($sql);
			return $res;
		    student_db::disconnect();
		
		}

		

		public function updateAttendance($a_id,$rno,$date,$year,$email,$status)
		{
			$cnn=attendance_db::connect();
			
			$sql="UPDATE `attendance_tbl` SET `fk_stu_rno`=".$rno.",`date`='".$date."',`stu_year`=".$year.",`fk_email_id`='".$email."',`attendance_status`='".$status."' WHERE pk_id=".$a_id;
			
			$res=$cnn->query($sql);
			return $res;
		    student_db::disconnect();
		
		}

		public function deleteAttendance($_arr)
		{
			$cnn=attendance_db::connect();
			$sql="delete from attendance_tbl where date in ('$_arr')";


			$res=$cnn->query($sql);
			return $res;
			student_db::disconnect();
		}

		public function deleteAttendanceOne($_id)
		{
			$cnn=attendance_db::connect();
			$sql="delete from attendance_tbl where date ='".$_id."' ";
			$res=$cnn->query($sql);
			return $res;
			student_db::disconnect();
        }
	
}

?>