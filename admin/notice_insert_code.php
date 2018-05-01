 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_link="../resources/notice/".basename($_FILES["txtlink"]["name"]);
$_date=$_POST["txtdate"];
$_cnt=$_POST["txtcnt"];
$_year=$_POST["selyear"];

$_email=$_SESSION["eid"];
$_address=$_POST["seladdress"];

if(move_uploaded_file($_FILES["txtlink"]["tmp_name"] , $_link ))
{
require '../shared/notice_db.php';
$obj=new notice_db();
$res=$obj->insertNotice($_id,$_title,$_desc,$_link,$_date,$_cnt,$_email,$_year,$_address);
if($res)
{
	header('location:notice.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="notice_insert.php">Back</a></button>
	</div>
	';
	echo "INSERT INTO notice_tbl VALUES (". $_id .",'" . $_title . "','" . $_desc . "','" . $_link . "','" . $_date . "',".$_cnt.",'" . $_email . "'," . $_year .  ") ";
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Notice!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="notice_insert.php">Back</a></button>
	</div>
	';
	
}

}

?>