<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_link="../resources/notice/".basename($_FILES["txtlink"]["name"]);
$_date=$_POST["txtdate"];
$_cnt=$_POST["txtcnt"];
$_year=$_POST["selyear"];
$_email="null";
//$_email=$_SESSION["email"];

if(move_uploaded_file($_FILES["txtlink"]["tmp_name"] , $_link ))
{
require '../shared/notice_db.php';
$obj=new notice_db();
$res=$obj->insertNotice($_id,$_title,$_desc,$_link,$_date,$_cnt,$_email,$_year);
if($res)
{
	header('location:notice.php');
}
else
{
echo 'Record Not Inserted';
echo "INSERT INTO notice_tble VALUES (". $_id .",'" . $_title . "','" . $_desc . "','" . $_link . "','" . $_date . "',".$_cnt.",'" . $_email . "'," . $_year .  ") ";
}
}
else{
	echo 'error in file upload';
}

}

?>