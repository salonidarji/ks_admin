<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_url=$_POST["txturl"];
$_year=$_POST["selyear"];
$_email="null";
//$_email=$_SESSION["email"];
require '../shared/material_db.php';
$obj=new material_db();
$res=$obj->insertMaterial($_id,$_title,$_desc,$_url,$_email,$_year);
if($res)
{
	header('location:material.php');
}
else
{
echo 'Record Not Inserted';
}


}

?>