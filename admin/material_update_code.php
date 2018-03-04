<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_url="../resources/material/".basename($_FILES["txturl"]["name"]);
$_year=$_POST["selyear"];
$_email="null";
//$_email=$_SESSION["email"];

if(move_uploaded_file($_FILES["txturl"]["tmp_name"] , $_url ))
{
require '../shared/material_db.php';
$obj=new material_db();
$res=$obj->updateMaterial($_id,$_title,$_desc,$_url,$_email,$_year);
if($res)
{
	header('location:material.php');
}
else
{
echo 'Record Not Upadated';
}
}
else
{
	echo 'error in move_upload file';
}

}

?>