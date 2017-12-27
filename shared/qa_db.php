<?php


class qa_db
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
		
		
		public function getAllQa()
		{
			$cnn=qa_db::connect();
			$sql="select * from qa_tbl";
			$res=$cnn->query($sql);
			return $res;
			qa_db::disconnect();
		
		}
		
		public function getQa($_id)
		{
			$cnn=qa_db::connect();
			$sql="select * from qa_tbl where pk_que_id ".$_id;
			$res=$cnn->query($sql);
			return $res;
			qa_db::disconnect();
		
        }
    
        public function insertQa($_id,$_title,$_desc,$_img,$_op1,$_op2,$_op3,$_op4,$_ans,$_year,$_email)
		{
			$cnn=qa_db::connect();
			
			$sql="INSERT INTO qa_tbl VALUES (". $_id .",'" . $_title . "','" . $_desc . "','" . $_img . "','" . $_op1 . "','" . $_op2 . "','" . $_op3 .  "','" . $_op4 . "','" . $_ans . "'," . $_year . ",'" . $_email . "') ";
			
			$res=$cnn->query($sql);
			return $res;
			qa_db::disconnect();
		
		}

		public function updateQa($_id,$_title,$_desc,$_img,$_op1,$_op2,$_op3,$_op4,$_ans,$_year,$_email)
		{
			
			$cnn=qa_db::connect();
			$sql="update qa_tbl set pk_que_id=".$_id.",que_title='".$_title."',que_img='".$_img."',op_1='".$_op1."',op_2='".$_op2."',op_3='".$_op3."',op_4='".$_op4."',ans='".$_ans."',fk_student_year='".$_year."',fk_email_id='".$_email."'  where pk_que_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			qa_db::disconnect();
		}
		
		
		public function deleteQa($arr)
		{
			$cnn=qa_db::connect();
			$sql="delete from qa_tbl where pk_que_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			qa_db::disconnect();
		}
	
}

?>