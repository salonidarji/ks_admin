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
$res=$obj->insertLogin($_email,$_profile,$_name,$_password,$_type,$_approve);
if($res)
{
	header('location:login.php');
}
else
{
echo 'Record Not Inserted';
echo "<br>INSERT INTO login_tbl values ( '". $_email ."',  '". $_profile ."','". $_name ."','". $_password ."',".$_type.",0,'".$_approve."')";
}
}
else{
	echo 'error in move upload file';
	
}


}

?>