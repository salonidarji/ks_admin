<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_ques=$_POST["txtques"];
$_ans=$_POST["txtans"];

require '../shared/faq_db.php';
$obj=new faq_db();
$res=$obj->insertFaq($_id,$_ques,$_ans);
if($res)
{
	header('location:faq.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_insert.php">Back</a></button>
	</div>
	';
	//echo "INSERT INTO material_tbl VALUES (". $_id .",'" . $_title . "','" . $_desc . "','" . $_url . "','" . $_email . "'," . $_year. ") ";
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="material_insert.php">Back</a></button>
	</div>
	';
	
}




?>