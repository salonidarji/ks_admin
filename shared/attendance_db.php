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
		
		
	/*	public function getAllStudent()
		{
			$cnn=student_db::connect();
			$sql="select * from student_tbl";
			$res=$cnn->query($sql);
			return $res;
			student_db::disconnect();
		
		}
		
		public function getStudent($_rno)
		{
			$cnn=student_db::connect();
			$sql="select * from student_tbl where pk_stu_rno= ".$_rno;
			$res=$cnn->query($sql);
			return $res;
			student_db::disconnect();
		
		}

		public function getStudentYear($_year)
		{
			$cnn=student_db::connect();
			$sql="select * from student_tbl where stu_year= ".$_year;
			$res=$cnn->query($sql);
			return $res;
			student_db::disconnect();
		
		}
		
		public function getStudentEmail($_email)
		{
			$cnn=student_db::connect();
			$sql="select * from student_tbl where fk_email_id = '" . $_email . "' ";
			$res=$cnn->query($sql);
			return $res;
			student_db::disconnect();
		
        }*/
		public function getAllDate()
		{
			$cnn=attendance_db::connect();
			
			$sql="select distinct date from attendance_tbl";
			
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
/*
		public function updateStudent($_rno,$_email,$_name,$_enrol,$_mo_no,$_gender,$_year,$_sem,$_course)
		{
			
			$cnn=student_db::connect();
			$sql="update student_tbl set pk_stu_rno=".$_rno.",fk_email_id='".$_email."',stu_name='".$_name."',stu_name='".$_enrol."',stu_mobile_no=' ".$_mo_no." ',stu_gender='".$_gender."',stu_year=".$_year.",stu_sem=".$_sem.",fk_course_name='".$_course."' where pk_stu_rno=".$_rno;
			$res=$cnn->query($sql);
			return $res;
			student_db::disconnect();
		}
		
		
		public function deleteStudent($arr)
		{
			$cnn=student_db::connect();
			$sql="delete from student_tbl where pk_stu_rno in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			student_db::disconnect();
		}

		public function deleteStudentOne($_id)
		{
			$cnn=student_db::connect();
			$sql="delete from student_tbl where pk_stu_rno =".$_id;
			$res=$cnn->query($sql);
			return $res;
			student_db::disconnect();
        }*/
	
}

?>