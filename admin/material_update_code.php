 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$_oldimg=$_SESSION["img"];
$_id=$_POST["txtid"];
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];


$_address=$_POST["seladdress"];
$_approve="pending";
$_email=$_SESSION["eid"];
if((basename($_FILES["txturl"]["name"]))==""){
	$_url=$_oldimg;
	$_flag=0;
	}
	else{
		if($_oldimg!=""){
			unlink($_oldimg);
		}
	$_url="../resources/material/".basename($_FILES["txturl"]["name"]);
	$_flag=1;
	}
if(move_uploaded_file($_FILES["txturl"]["tmp_name"] , $_url ) || $_flag==0)
{

require '../shared/material_db.php';
$obj=new material_db();
$res=$obj->updateMaterial($_id,$_title,$_desc,$_url,$_email,$_address,$_approve);
if($res)
{
	header('location:material.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_update.php?id='.$_id.'">Back</a></button>
	</div>
	';
}
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Material !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_update.php?id='.$_id.'">Back</a></button>
	</div>
	';
}

}

?>