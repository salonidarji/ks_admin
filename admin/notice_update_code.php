 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$_oldimg=$_SESSION["img"];
$_id=$_POST["txtid"];
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];

$_date=$_POST["txtdate"];
$_cnt=$_POST["txtcnt"];
$_year=$_POST["selyear"];
$_address=$_POST["seladdress"];
$_email=$_SESSION["eid"];
if((basename($_FILES["txtlink"]["name"]))==""){
	$_link=$_oldimg;
	$_flag=0;
	}
	else{
		if($_oldimg!=""){
			unlink($_oldimg);
		}
		$_link="../resources/notice/".basename($_FILES["txtlink"]["name"]);
	$_flag=1;
	}
if(move_uploaded_file($_FILES["txtlink"]["tmp_name"] , $_link ) || $_flag==0)
{
require '../shared/notice_db.php';
$obj=new notice_db();
$res=$obj->updateNotice($_id,$_title,$_desc,$_link,$_date,$_cnt,$_email,$_year,$_address);
if($res)
{
	header('location:notice.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="notice_update.php?id='.$_id.'">Back</a></button>
	</div>
	';
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Notice!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="notice_update.php?id='.$_id.'">Back</a></button>
	</div>
	';
}


}

?>