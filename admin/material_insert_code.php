<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_url="../resources/material/".basename($_FILES["txturl"]["name"]);

$_year=$_POST["selyear"];

$_email=$_SESSION["email"];
if(move_uploaded_file($_FILES["txturl"]["tmp_name"] , $_url ))
{
require '../shared/material_db.php';
$obj=new material_db();
$res=$obj->insertMaterial($_id,$_title,$_desc,$_url,$_email,$_year);
if($res)
{
	header('location:material.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_insert.php">Back</a></button>
	</div>
	';
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