<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_type=$_POST["seltype"];
$_password=$_POST["txtpass"];
$_profile="../resources/login/".basename($_FILES["txtprofile"]["name"]);
$_approve=$_POST["selapprove"];
if(move_uploaded_file($_FILES["txtprofile"]["tmp_name"] , $_profile ))
{
require '../shared/login_db.php';
$obj=new login_db();
$res=$obj->updateLogin($_email,$_name,$_type,$_password,$_profile,$_approve);
if($res)
{
	header('location:login.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="login_update.php">Back</a></button>
	</div>
	';
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="login_update.php">Back</a></button>
	</div>
	';
	
}


}

?>