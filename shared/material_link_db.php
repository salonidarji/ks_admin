<?php


class material_link_db
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
		
		
	/*	public function getAllMaterial()
		{
			$cnn=material_db::connect();
			$sql="select * from material_tbl";
			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		
        }*/
		public function getLink($year,$sem,$course)
		{
			$cnn=material_link_db::connect();
			$sql="select * from material_link_tbl where link_year=".$year." && link_sem=".$sem." && link_address='".$course."'  ";
			$res=$cnn->query($sql);
			return $res;
			material_link_db::disconnect();
		
        }
        
        
        public function updateMaterial($_id,$_course,$_sem,$_year,$_link1,$_link2,$_link3,$_link4,$_link5,$_link6,$_link7,$_link8,$_link9)
		{
			
			$cnn=material_link_db::connect();
			$sql="update material_link_tbl set link_address='".$_course."',link_sem=".$_sem.",link_year=".$_year.",first_link='".$_link1."',second_link='".$_link2."',third_link='".$_link3."',fourth_link='".$_link4."',fifth_link='".$_link5."',sixth_link='".$_link6."',seventh_link='".$_link7."',eighth_link='".$_link8."',ninth_link='".$_link9."'  where link_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			material_link_db::disconnect();
		}
		/*
		public function getPendingMaterial()
		{
			$cnn=material_db::connect();
			$sql="select * from material_tbl where material_approve='pending' ";
			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		
        }
    
        public function insertMaterial($_id,$_title,$_desc,$_url,$_email,$_year,$_address,$_approve)
		{
			$cnn=material_db::connect();
			
			$sql="INSERT INTO material_tbl VALUES (". $_id .",'" . $_title . "','" . $_desc . "','" . $_url . "','" . $_email . "'," . $_year. ",'" . $_address . "','" . $_approve . "') ";
			
			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		
		}

		public function updateMaterial($_id,$_title,$_desc,$_url,$_email,$_year,$_address,$_approve)
		{
			
			$cnn=material_db::connect();
			$sql="update material_tbl set pk_material_id=".$_id.",material_title='".$_title."',material_url='".$_url."',fk_email_id='".$_email."',fk_student_year=".$_year.",material_address='".$_address."',material_approve='".$_approve."'  where pk_material_id=".$_id;
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
	*/
}

?>