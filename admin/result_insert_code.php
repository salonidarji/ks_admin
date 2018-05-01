 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
session_start();
include 'validation.php';
$msg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	require '../shared/result_db.php';
	$obj=new result_db();
	

	$n_sub=$_SESSION["n_sub"];
$_id="null";

$_type=$_POST["txttype"];
if(validateRno($_POST["txtrno"])){
	$_rno=$_POST["txtrno"];
	}
	else{
		$msg= $msg."<br>Invalid Roll Number is Entered";
		$_rno="";
		$error=1;
	}
$_gpa=$_POST["txtgpa"];
$_course=$_SESSION["course"];
$res_email=$obj->getStudentEmail($_rno,$_course);

if($res_email){
$row_email=$res_email->fetch_assoc();
//echo "email==".$row_email["fk_email_id"];

$_email=$row_email["fk_email_id"];
}
else{
	$msg= $msg."<br>Student NOt Found For this Roll Number";
	$_email="";
	$error=1;
}
$_year=$_SESSION["year"];
$_sem=$_SESSION["sem"];
if($n_sub>1)
{
$_sub1=$_POST["txtsub1"];
$_sub1_marks=$_POST["txtsub1_marks"];
$_sub2=$_POST["txtsub2"];
$_sub2_marks=$_POST["txtsub2_marks"];
$_sub3=$_POST["txtsub3"];
$_sub3_marks=$_POST["txtsub3_marks"];
$_sub4=$_POST["txtsub4"];
$_sub4_marks=$_POST["txtsub4_marks"];
$_sub5=$_POST["txtsub5"];
$_sub5_marks=$_POST["txtsub5_marks"];
$_sub6=$_POST["txtsub6"];
$_sub6_marks=$_POST["txtsub6_marks"];
$_sub7=$_POST["txtsub7"];
$_sub7_marks=$_POST["txtsub7_marks"];
$_sub8=$_POST["txtsub8"];
$_sub8_marks=$_POST["txtsub8_marks"];

$_sub9="null";
$_sub9_marks="null";
}
else if($n_sub==1){
	$_sub1=$_POST["txtsub1"];
$_sub1_marks=$_POST["txtsub1_marks"];

$_sub2="null";
$_sub2_marks="null";
$_sub3="null";
$_sub3_marks="null";
$_sub4="null";
$_sub4_marks="null";
$_sub5="null";
$_sub5_marks="null";
$_sub6="null";
$_sub6_marks="null";
$_sub7="null";
$_sub7_marks="null";
$_sub8="null";
$_sub8_marks="null";

$_sub9="null";
$_sub9_marks="null";
}
else{
	echo 'error in n_sub';
}
if($n_sub==9)
{
$_sub9=$_POST["txtsub9"];
$_sub9_marks=$_POST["txtsub9_marks"];
}

$res=$obj->insertResult($_id,$_type,$_email,$_rno,$_course,$_year,$_sem,$_gpa,$_sub1,$_sub1_marks,$_sub2,$_sub2_marks,$_sub3,$_sub3_marks,$_sub4,$_sub4_marks,$_sub5,$_sub5_marks,$_sub6,$_sub6_marks,$_sub7,$_sub7_marks,$_sub8,$_sub8_marks,$_sub9,$_sub9_marks);
if($res  && $error==0)
{
	header('location:result.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> '.$msg.'<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="result_insert.php">Back</a></button>
	</div>
	';
	//echo "SELECT fk_email_id FROM student_tbl where fk_course_name ='".$_course."' && pk_stu_rno =".$_rno;
}


}

?>