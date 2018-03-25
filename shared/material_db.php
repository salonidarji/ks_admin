<?php


class material_db
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
		
		
		public function getAllMaterial()
		{
			$cnn=material_db::connect();
			$sql="select * from material_tbl";
			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		
		}
		public function getMaterial($_mAddress)
		{
			$cnn=material_db::connect();
			$sql="select * from material_tbl where material_address='".$_mAddress."'";
			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		
		}
		
		public function getPendingMaterial()
		{
			$cnn=material_db::connect();
			$sql="select * from material_tbl where material_approve='pending' ";
			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		
        }
    
        public function insertMaterial($_id,$_title,$_desc,$_url,$_email,$_year)
		{
			$cnn=material_db::connect();
			
			$sql="INSERT INTO material_tbl VALUES (". $_id .",'" . $_title . "','" . $_desc . "','" . $_url . "','" . $_email . "'," . $_year. ") ";
			
			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		
		}

		public function updateMaterial($_id,$_title,$_desc,$_url,$_email,$_year,$_approve)
		{
			
			$cnn=material_db::connect();
			$sql="update material_tbl set pk_material_id=".$_id.",material_title='".$_title."',material_url='".$_url."',fk_email_id='".$_email."',fk_student_year=".$_year."  where pk_material_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		}
		
		
		
		public function updateApprove($_arr)
		{
			$cnn=material_db::connect();
			$sql="UPDATE material_tbl SET material_approve='approved' where pk_material_id in ($_arr) ";


			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		}

		public function deleteMaterial($arr)
		{
			$cnn=material_db::connect();
			$sql="delete from material_tbl where pk_material_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		}

		public function deleteMaterialOne($_id)
		{
			$cnn=material_db::connect();
			$sql="delete from material_tbl where pk_material_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		}
	
}

?>