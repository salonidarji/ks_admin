<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$_oldimg=$_SESSION["img"];
$_email=$_POST["txtemail"];
$_enrol=$_POST["txtenrol"];
$_name=$_POST["txtname"];
$_type=$_POST["seltype"];
$_password=$_POST["txtpass"];

$_approve=$_POST["selapprove"];

if((basename($_FILES["txtprofile"]["name"]))==""){
	$_profile=$_oldimg;
	$_flag=0;
	}
	else{
		if($_oldimg!=""){
			unlink($_oldimg);
		}
		$_profile="../resources/login/".basename($_FILES["txtprofile"]["name"]);
	$_flag=1;
	}
if(move_uploaded_file($_FILES["txtprofile"]["tmp_name"] , $_profile ) || $_flag==0 )
{
require '../shared/login_db.php';
$obj=new login_db();
$res=$obj->updateLogin($_email,$_enrol,$_profile,$_name,$_password,$_type,$_approve);
if($res)
{
	header('location:login.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="login_update.php?id='.$_email.'">Back</a></button>
	</div>
	';
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="login_update.php?id='.$_email.'">Back</a></button>
	</div>
	';
	
}


}

?>