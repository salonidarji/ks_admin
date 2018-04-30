<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$_oldimg1=$_SESSION["img1"];
	$_oldimg2=$_SESSION["img2"];
	$_oldimg3=$_SESSION["img3"];
	$_oldimg4=$_SESSION["img4"];
	$_oldimg5=$_SESSION["img5"];
	$_oldimg6=$_SESSION["img6"];
	$_oldimg7=$_SESSION["img7"];
	$_oldimg8=$_SESSION["img8"];
	$_oldimg9=$_SESSION["img9"];

	$_id=$_SESSION["id"];
    $_sem=$_SESSION["sem"];
    $_year=$_SESSION["year"];
    $_course=$_SESSION["course"];



$_link2="../resources/material_notes/".basename($_FILES["link2"]["name"]);
$_link3="../resources/material_notes/".basename($_FILES["link3"]["name"]);
$_link4="../resources/material_notes/".basename($_FILES["link4"]["name"]);
$_link5="../resources/material_notes/".basename($_FILES["link5"]["name"]);
$_link6="../resources/material_notes/".basename($_FILES["link6"]["name"]);
$_link7="../resources/material_notes/".basename($_FILES["link7"]["name"]);
$_link8="../resources/material_notes/".basename($_FILES["link8"]["name"]);
$_link9="../resources/material_notes/".basename($_FILES["link9"]["name"]);

if((basename($_FILES["link1"]["name"]))==""){
	$_link1=$_oldimg1;
	$_flag1=0;
	}
	else{
		if($_oldimg1!=""){
			unlink($_oldimg1);
		}
		$_link1="../resources/material_notes/".basename($_FILES["link1"]["name"]);
	$_flag1=1;
	}

	if((basename($_FILES["link2"]["name"]))==""){
		$_link2=$_oldimg2;
		$_flag2=0;
		}
		else{
			if($_oldimg2!=""){
				unlink($_oldimg2);
			}
			$_link2="../resources/material_notes/".basename($_FILES["link2"]["name"]);
		$_flag2=1;
		}

		if((basename($_FILES["link3"]["name"]))==""){
			$_link3=$_oldimg3;
			$_flag3=0;
			}
			else{
				if($_oldimg3!=""){
					unlink($_oldimg3);
				}
				$_link3="../resources/material_notes/".basename($_FILES["link3"]["name"]);
			$_flag3=1;
			}

			if((basename($_FILES["link4"]["name"]))==""){
				$_link4=$_oldimg4;
				$_flag4=0;
				}
				else{
					if($_oldimg4!=""){
						unlink($_oldimg4);
					}
					$_link4="../resources/material_notes/".basename($_FILES["link4"]["name"]);
				$_flag4=1;
				}

				if((basename($_FILES["link5"]["name"]))==""){
					$_link5=$_oldimg5;
					$_flag5=0;
					}
					else{
						if($_oldimg5!=""){
							unlink($_oldimg5);
						}
						$_link5="../resources/material_notes/".basename($_FILES["link5"]["name"]);
					$_flag5=1;
					}

					if((basename($_FILES["link6"]["name"]))==""){
						$_link6=$_oldimg6;
						$_flag6=0;
						}
						else{
							if($_oldimg6!=""){
								unlink($_oldimg6);
							}
							$_link6="../resources/material_notes/".basename($_FILES["link6"]["name"]);
						$_flag6=1;
						}

						if((basename($_FILES["link7"]["name"]))==""){
							$_link7=$_oldimg7;
							$_flag7=0;
							}
							else{
								if($_oldimg7!=""){
									unlink($_oldimg7);
								}
								$_link7="../resources/material_notes/".basename($_FILES["link7"]["name"]);
							$_flag7=1;
							}

							if((basename($_FILES["link8"]["name"]))==""){
								$_link8=$_oldimg8;
								$_flag8=0;
								}
								else{
									if($_oldimg8!=""){
										unlink($_oldimg8);
									}
									$_link8="../resources/material_notes/".basename($_FILES["link8"]["name"]);
								$_flag8=1;
								}

								if((basename($_FILES["link9"]["name"]))==""){
									$_link9=$_oldimg9;
									$_flag9=0;
									}
									else{
										if($_oldimg9!=""){
											unlink($_oldimg9);
										}
										$_link9="../resources/material_notes/".basename($_FILES["link9"]["name"]);
									$_flag9=1;
									}

	
if(move_uploaded_file($_FILES["link1"]["tmp_name"] , $_link1 ) || $_flag1==0 ){
	
    if(move_uploaded_file($_FILES["link2"]["tmp_name"] , $_link2 ) || $_flag2==0){
		
        if(move_uploaded_file($_FILES["link3"]["tmp_name"] , $_link3 ) || $_flag3==0){
			
            if(move_uploaded_file($_FILES["link4"]["tmp_name"] , $_link4 ) || $_flag4==0){
				
                if(move_uploaded_file($_FILES["link5"]["tmp_name"] , $_link5 ) || $_flag5==0){
					
                    if(move_uploaded_file($_FILES["link6"]["tmp_name"] , $_link6 ) || $_flag6==0){
						
                        if(move_uploaded_file($_FILES["link7"]["tmp_name"] , $_link7 ) || $_flag7==0){
							
                            if(move_uploaded_file($_FILES["link8"]["tmp_name"] , $_link8 ) || $_flag8==0){
								
                                if(move_uploaded_file($_FILES["link9"]["tmp_name"] , $_link9 ) || $_flag9==0){
require '../shared/material_link_db.php';
$obj=new material_link_db();
$res=$obj->updateMaterial($_id,$_course,$_sem,$_year,$_link1,$_link2,$_link3,$_link4,$_link5,$_link6,$_link7,$_link8,$_link9);
if($res)
{
	header('location:starter.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_link_update.php">Back</a></button>
	</div>
	';
//	echo "INSERT INTO material_tbl VALUES (". $_id .",'" . $_title . "','" . $_desc . "','" . $_url . "','" . $_email . "'," . $_year. ") ";
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image9!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_link_update.php">Back</a></button>
	</div>
	';
	
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image8!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_link_update.php">Back</a></button>
	</div>
	';
	
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image7!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_link_update.php">Back</a></button>
	</div>
	';
	
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image6!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_link_update.php">Back</a></button>
	</div>
	';
	
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image5!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_link_update.php">Back</a></button>
	</div>
	';
	
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image4!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_link_update.php">Back</a></button>
	</div>
	';
	
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image3!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_link_update.php">Back</a></button>
	</div>
	';
	
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image2!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_link_update.php">Back</a></button>
	</div>
	';
	
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image1!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_link_update.php">Back</a></button>
	</div>
	';
	
}


}

?>