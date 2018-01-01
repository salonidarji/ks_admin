<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_link=$_POST["txtlink"];
$_date=$_POST["txtdate"];
$_cnt=$_POST["txtcnt"];
$_year=$_POST["selyear"];
$_email="null";
//$_email=$_SESSION["email"];
require '../shared/notice_db.php';
$obj=new notice_db();
$res=$obj->updateNotice($_id,$_title,$_desc,$_link,$_date,$_cnt,$_email,$_year);
if($res)
{
	header('location:notice.php');
}
else
{
echo 'Record Not Updated';
}


}

?>