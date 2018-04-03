 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_rno=$_POST["txtrno"];
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_enrol=$_POST["txtenrol"];
$_mo_no=$_POST["txtmo_no"];
$_gender=$_POST["selgen"];
$_year=$_POST["selyear"];
$_sem=$_POST["selsem"];
$_course=$_POST["selcourse"];

require '../shared/student_db.php';
$obj=new student_db();
$res=$obj->insertStudent($_rno,$_email,$_name,$_enrol,$_mo_no,$_gender,$_year,$_sem,$_course); 

if($res)
{
	$_type=0;
	$_img="null";
	$_password=rand(1000,9999);
	echo "pass=".$_password;
	$_approve="pending";
	require '../shared/login_db.php';
	$obj_l=new login_db();
	$res_l=$obj_l->insertLogin($_email,$_enrol,$_img,$_name,$_password,$_type,$_approve);
	if($res_l)
	{ 
	header('location:login.php');
	 }
	else{
		echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="faculty_insert.php">Back</a></button>
	</div>
	';
	} 
}
else
{
    echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="student_insert.php">Back</a></button>
	</div>
	';
    echo "INSERT INTO student_tbl VALUES (".$_rno.",'".$_email."','".$_name."','".$_enrol."','".$_mo_no."','".$_gender."',".$_year.")";
	
}
}
?>


