<?php


class slider_db
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
		public function getAllSlider()
		{
			$cnn=slider_db::connect();
			$sql="select * from slider_tbl";
			$res=$cnn->query($sql);
			return $res;
			slider_db::disconnect();
		
		}
		
		
		//home slider
		public function getHomeSlider()
		{
			$cnn=slider_db::connect();
			$sql="select * from slider_tbl where address ='home'";
			$res=$cnn->query($sql);
			return $res;
			slider_db::disconnect();
		
		}
		//mba placement slider
		public function getSlider()
		{
			$cnn=slider_db::connect();
			$sql="select * from slider_tbl where address ='mba_placement'";
			$res=$cnn->query($sql);
			return $res;
			slider_db::disconnect();
		
        }
       public function getmSlider()
		{
			$cnn=slider_db::connect();
			$sql="select * from slider_tbl where address ='msc_placement'";
			$res=$cnn->query($sql);
			return $res;
			slider_db::disconnect();
		
        }
		 public function getaboutSlider()
		{
			$cnn=slider_db::connect();
			$sql="select * from slider_tbl where address ='aboutus'";
			$res=$cnn->query($sql);
			return $res;
			slider_db::disconnect();
		
        }
        public function insertSlider($_id,$_img,$_cnt,$_time,$_address)
		{
			$cnn=slider_db::connect();
			
			$sql="INSERT INTO slider_tbl VALUES (". $_id .",'" . $_img . "'," . $_cnt . "," . $_time . ",'" . $_address . "') ";
			
			$res=$cnn->query($sql);
			return $res;
			slider_db::disconnect();
		
		}

		public function updateSlider($_id,$_img,$_cnt,$_time,$_address)
		{
			
			$cnn=slider_db::connect();
			$sql="update slider_tbl set pk_slider_id=".$_id.",slider_img='".$_img."',slider_count=".$_cnt.",slider_time=".$_time.",address='".$_address."' where pk_slider_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			slider_db::disconnect();
		}
		
		
		public function deleteSlider($arr)
		{
			$cnn=slider_db::connect();
			$sql="delete from slider_tbl where pk_slider_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			slider_db::disconnect();
		}

		public function deleteSliderOne($_id)
		{
			$cnn=slider_db::connect();
			$sql="delete from slider_tbl where pk_slider_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			slider_db::disconnect();
		}
	
}

?>