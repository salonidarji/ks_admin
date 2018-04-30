 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];

$_op1=$_POST["txtop1"];
$_op2=$_POST["txtop2"];
$_op3=$_POST["txtop3"];
$_op4=$_POST["txtop4"];
$_ans=$_POST["txtans"];
$_year=$_POST["selyear"];
$_email=$_SESSION["eid"];

if((basename($_FILES["txtimg"]["name"]))==""){
	$_img=$_oldimg;
	$_flag=0;
	}
	else{
		if($_oldimg!=""){
			unlink($_oldimg);
		}
		$_img="../resources/exam/".basename($_FILES["txtimg"]["name"]);
	$_flag=1;
	}
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"] , $_img ) || $_flag==0)
{
require '../shared/qa_db.php';
$obj=new qa_db();
$res=$obj->updateQa($_id,$_title,$_desc,$_img,$_op1,$_op2,$_op3,$_op4,$_ans,$_year,$_email); 

if($res)
{
    header('location:qa.php');
}
else
{
    echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="qa_update.php?id='.$_id.'">Back</a></button>
	</div>
	';
}
}
else{
	header('location:qa.php');
	
}
}
?>


