<?php


class result_db
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
		
		
		public function getAllResult()
		{
			$cnn=result_db::connect();
			$sql="select * from result_tbl";
			$res=$cnn->query($sql);
			return $res;
			result_db::disconnect();
		
		}
		
		public function getResult($_id)
		{
			$cnn=result_db::connect();
			$sql="select * from result_tbl where pk_result_id ".$_id;
			$res=$cnn->query($sql);
			return $res;
			result_db::disconnect();
		
        }
    
        public function insertResult($_id,$_type,$_email,$_sub1,$_sub1_marks,$_sub2,$_sub2_marks,$_sub3,$_sub3_marks,$_sub4,$_sub4_marks,$_sub5,$_sub5_marks,$_sub6,$_sub6_marks,$_sub7,$_sub7_marks,$_sub8,$_sub8_marks,$_sub9,$_sub9_marks)
		{
			$cnn=result_db::connect();
			
			$sql="INSERT INTO result_tbl VALUES (".$_id.",".$_type.",'" .$_email." ',' ".$_sub1." '," .$_sub1_marks. ",'" .$_sub2. "'," .$_sub2_marks. ",'". $_sub3. "'," .$_sub3_marks. ",'" .$_sub4. "'," .$_sub4_marks .",'". $_sub5 ."',".$_sub5_marks.",'".$_sub6."',".$_sub6_marks.",'".$_sub7."',".$_sub7_marks.",'".$_sub8."',".$_sub8_marks.",'".$_sub9."',".$_sub9_marks.") ";
			
			$res=$cnn->query($sql);
			return $res;
			result_db::disconnect();
		
		}

		public function updateResult($_id,$_type,$_email,$_sub1,$_sub1_marks,$_sub2,$_sub2_marks,$_sub3,$_sub3_marks,$_sub4,$_sub4_marks,$_sub5,$_sub5_marks,$_sub6,$_sub6_marks,$_sub7,$_sub7_marks,$_sub8,$_sub8_marks,$_sub9,$_sub9_marks)
		{
			
			$cnn=result_db::connect();
			$sql="update result_tbl set pk_result_id=".$_id.",result_type=".$_type.",fk_email_id='".$_email."',sub1_name='".$_sub1."',sub1_marks=".$_sub1_marks.",sub2_name='".$_sub2."',sub2_marks=".$_sub2_marks.",sub3_name='".$_sub3."',sub3_marks=".$_sub3_marks.",sub4_name='".$_sub4."',sub4_marks=".$_sub4_marks.",sub5_name='".$_sub5."',sub5_marks=".$_sub5_marks.",sub6_name='".$_sub6."',sub6_marks=".$_sub6_marks.",sub7_name='".$_sub7."',sub7_marks=".$_sub7_marks.",sub8_name='".$_sub8."',sub8_marks=".$_sub8_marks.",sub9_name='".$_sub9."',sub9_marks=".$_sub9_marks." where pk_result_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			result_db::disconnect();
		}
		
		
		public function deleteResult($arr)
		{
			$cnn=result_db::connect();
			$sql="delete from result_tbl where pk_result_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			result_db::disconnect();
		}

		public function deleteResultOne($_id)
		{
			$cnn=result_db::connect();
			$sql="delete from result_tbl where pk_result_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			result_db::disconnect();
		}
	
}

?>