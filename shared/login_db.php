<?php
class login_db
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
		
		
		public function getAllLogin()
		{
			$cnn=login_db::connect();
			$sql="select * from login_tbl";
			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		
		}
		
		public function getStudent()
		{
			$cnn=login_db::connect();
			$sql="SELECT * from login_tbl where login_approve='pending' && login_type=0";
			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		
		}

		public function getFaculty()
		{
			$cnn=login_db::connect();
			$sql="SELECT * from login_tbl where login_approve='pending' && login_type=2";
			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		
		}

		public function updateFlag($id,$_flag)
		{
			$cnn=login_db::connect();
			$sql="UPDATE login_tbl SET flag=".$_flag." WHERE pk_login_email_id='".$id."' ";
			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		}

		public function getLogin($_id)
		{
			$cnn=login_db::connect();
			$sql="select * from login_tbl where pk_login_email_id ='".$_id."'";
			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		
		}

		
		public function logUser($id,$passwd){
			$cnn=login_db::connect();
			$sql="select * from login_tbl where pk_login_email_id='".$id."' and login_passwd='".$passwd."' && login_approve='approved'";
			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		}
    
        public function signUp($_id,$_img,$_name,$_passwd,$_type,$_flag)
		{
			$cnn=login_db::connect();
			
			$sql="INSERT INTO login_tbl values ( '". $_id ."',  '". $_img ."','". $_name ."','". $_passwd ."',".$_type.",".$_flag.",'pending')";

			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		
		}

		public function insertLogin($_email,$_profile,$_name,$_password,$_type,$_approve)
		{
			$cnn=login_db::connect();
			
			$sql="INSERT INTO login_tbl values ( '". $_email ."',  '". $_profile ."','". $_name ."','". $_password ."',".$_type.",0,'".$_approve."')";

			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		
		}

		public function updateApprove($_arr){
			$cnn=login_db::connect();
			
			$sql="UPDATE login_tbl SET login_approve='approved' where pk_login_email_id in ('$_arr') " ;

			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		}

		public function updateApproveOne($_email){
			$cnn=login_db::connect();
			
			$sql="UPDATE login_tbl SET login_approve='approved' where pk_login_email_id ='".$_email."' " ;

			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		}

		public function updateLogin($_email,$_name,$_type,$_password,$_profile,$_approve)
		{
			
			$cnn=login_db::connect();
			$sql="update login_tbl set pk_login_email_id='".$_email."',login_profile='".$_profile."',login_uname='".$_name."',login_passwd='".$_password."',login_type=".$_type." ,login_approve='".$_approve."' where pk_login_email_id='".$_email."' ";
			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		}
		
		
		public function deleteLogin($arr)
		{
			$cnn=login_db::connect();
			$sql="delete from login_tbl where pk_login_email_id in ('$arr')";


			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		}

		public function deleteLoginOne($_id)
		{
			$cnn=login_db::connect();
			$sql="delete from login_tbl where pk_login_email_id ='".$_id."'";


			$res=$cnn->query($sql);
			return $res;
			login_db::disconnect();
		}
    

  /*  public function insertType($_email,$_name,$_type)
    {
        $cnn=login_db::connect();
        
        $sql="update login_tbl set pk_login_email_id='".$_email."',login_uname='".$_name."',login_passwd='null',login_type=".$_type."  where pk_login_email_id=".$_email;
        
        $res=$cnn->query($sql);
        return $res;
        login_db::disconnect();
    
	} */
    
}

?>