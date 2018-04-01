 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$n_sub=$_SESSION["n_sub"];
	echo 'n_sub='.$n_sub;
$_id=$_POST["txtid"];
$_type=$_POST["seltype"];

$_email=$_POST["txtemail"];
$_rno=$_POST["txtrno"];
$_gpa=$_POST["txtgpa"];
$_year=$_SESSION["year"];
$_sem=$_SESSION["sem"];
if($n_sub>1)
{
$sub1=$_POST["txtsub1"];
$sub1_marks=$_POST["txtsub1_marks"];
$sub2=$_POST["txtsub2"];
$sub2_marks=$_POST["txtsub2_marks"];
$sub3=$_POST["txtsub3"];
$sub3_marks=$_POST["txtsub3_marks"];
$sub4=$_POST["txtsub4"];
$sub4_marks=$_POST["txtsub4_marks"];
$sub5=$_POST["txtsub5"];
$sub5_marks=$_POST["txtsub5_marks"];
$sub6=$_POST["txtsub6"];
$sub6_marks=$_POST["txtsub6_marks"];
$sub7=$_POST["txtsub7"];
$sub7_marks=$_POST["txtsub7_marks"];
$sub8=$_POST["txtsub8"];
$sub8_marks=$_POST["txtsub8_marks"];

$sub9="null";
$sub9_marks="null";
}
else if($n_sub==1){
	$sub1=$_POST["txtsub1"];
$sub1_marks=$_POST["txtsub1_marks"];

$sub2="null";
$sub2_marks="null";
$sub3="null";
$sub3_marks="null";
$sub4="null";
$sub4_marks="null";
$sub5="null";
$sub5_marks="null";
$sub6="null";
$sub6_marks="null";
$sub7="null";
$sub7_marks="null";
$sub8="null";
$sub8_marks="null";

$sub9="null";
$sub9_marks="null";
}
else{
	echo 'error in n_sub';
}
if($n_sub==9)
{
$sub9=$_POST["txtsub9"];
$sub9_marks=$_POST["txtsub9_marks"];
}
require '../shared/result_db.php';
$obj=new result_db();
$res=$obj->updateResult($_id,$_type,$_email,$_rno,$_year,$_sem,$_gpa,$sub1,$sub1_marks,$sub2,$sub2_marks,$sub3,$sub3_marks,$sub4,$sub4_marks,$sub5,$sub5_marks,$sub6,$sub6_marks,$sub7,$sub7_marks,$sub8,$sub8_marks,$sub9,$sub9_marks);
if($res)
{
	header('location:result.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="result_update.php">Back</a></button>
	</div>
	';}


}

?>