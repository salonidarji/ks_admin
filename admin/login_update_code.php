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
echo 'Record Not Updated';
}
}
else{
	echo 'error in move upload file';
	
}


}

?>