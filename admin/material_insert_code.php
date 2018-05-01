<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
session_start();
include 'validation.php';
$msg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_url="../resources/material/".basename($_FILES["txturl"]["name"]);

if($_POST["seladdress"]=="0"){
	$msg= $msg."<br>Please Select Address";
					$_address="";
					$error=1;
			
				}
				else{
					$_address=$_POST["seladdress"];
				}


$_approve="pending";
$_email=$_SESSION["eid"];
if(move_uploaded_file($_FILES["txturl"]["tmp_name"] , $_url ))
{
require '../shared/material_db.php';
$obj=new material_db();
$res=$obj->insertMaterial($_id,$_title,$_desc,$_url,$_email,$_address,$_approve);
if($res && $error==0)
{
	header('location:material.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2>'.$msg.'<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_insert.php">Back</a></button>
	</div>
	';
	//echo "INSERT INTO material_tbl VALUES (". $_id .",'" . $_title . "','" . $_desc . "','" . $_url . "','" . $_email . "'," . $_year. ") ";
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_insert.php">Back</a></button>
	</div>
	';
	
}


}

?>