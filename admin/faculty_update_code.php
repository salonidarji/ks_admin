   <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php

include 'validation.php';
$msg="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
if(validateEmail($_POST["txtemail"])){
	$_email=$_POST["txtemail"];
	}
	else{
		$msg= $msg."<br>Invalid Email Id is Entered";
		$_email="";
		$error=1;
	}

if(validateName($_POST["txtname"])){
$_name=$_POST["txtname"];
}
else{
	$msg= $msg."<br>Invalid Name is Entered";
	$_name="";
	$error=1;
}
$_degree=$_POST["txtdegree"];
$_desc=$_POST["txtdesc"];
$_course=$_POST["selcourse"];
$_desig=$_POST["txtdesig"];
$_teach_exp=$_POST["txtteach_exp"];
$_phd=$_POST["txtphd"];
$_paper=$_POST["txtpaper"];
$_specialization=$_POST["txtspec"];
$_activities=$_POST["txtactivities"];

$_img="../resources/faculty/".basename($_FILES["txtimg"]["name"]);
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"] , $_img ))
{
require '../shared/faculty_db.php';
$obj=new faculty_db();
$res=$obj->updateFaculty($_email,$_name,$_id,$_img,$_course,$_desig,$_degree,$_desc,$_teach_exp,$_phd,$_paper,$_specialization,$_activities);
if($res && $error==0)
{
	$_type=2;
	$_password=rand(1000,9999);
	echo "pass=".$_password;
	$_approve="pending";
	$_enrol="null";
	require '../shared/login_db.php';
	$obj_l=new login_db();
    $res_l=$obj_l->updateLogin($_email,$_enrol,$_img,$_name,$_password,$_type,$_approve);
	//echo "res_l".mysqli_num_rows($res_l);
	//echo "update login_tbl set pk_login_email_id='".$_email."',login_enrolno='".$_enrol."',login_profile='".$_img."',login_uname='".$_name."',login_passwd='".$_password."',login_type=".$_type." ,login_approve='".$_approve."' where pk_login_email_id='".$_email."' ";
	if($res_l && $error==0)
	{ 
	header('location:faculty.php');
	}
	else{
		echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2>'.$msg.'!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="faculty_insert.php">Back</a></button>
	</div>
	';
	
	}  
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> '.$msg.',<br> Please Try Again !!!</h2>
	<br><button class="btn btn-default btn-lg"><a href="faculty_insert.php">Back</a></button>
	</div>
	';
//	echo "<br>update faculty_tbl set fk_email_id='".$_email."',faculty_name='".$_name."', pk_faculty_id=".$_id.",faculty_img='".$_img."',faculty_course='".$_course."',faculty_desig='".$_desig."',faculty_degree='".$_degree."',faculty_description='".$_desc."',teaching_experience='".$_teach_exp."',phd_details='".$_phd."',paper_presented='".$_paper."',specialization='".$_specialization."',activities='".$_activities."'  where pk_faculty_id=".$_id;
}
}
}
?>
