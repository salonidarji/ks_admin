<?php


class faq_db
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
		
		
		public function getAllFaq()
		{
			$cnn=faq_db::connect();
			$sql="select * from faq_tbl";
			$res=$cnn->query($sql);
			return $res;
			faq_db::disconnect();
		
		}
		public function insertFaq($_id,$_ques,$_ans)
		{
			$cnn=faq_db::connect();
			
			$sql="INSERT INTO faq_tbl VALUES (". $_id .",'" . $_ques . "','" . $_ans . "') ";
			
			$res=$cnn->query($sql);
			return $res;
			faq_db::disconnect();
		
		}
		public function updateFaq($_id,$_ques,$_ans)
		{
			
			$cnn=faq_db::connect();
			$sql="update faq_tbl set faq_ques='".$_ques."',faq_ans='".$_ans."' where faq_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			faq_db::disconnect();
		}
		public function deleteFaq($_id)
		{
			$cnn=faq_db::connect();
			$sql="delete from faq_tbl where faq_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			faq_db::disconnect();
		}
    }	
		
        

?>