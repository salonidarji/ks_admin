   <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_degree=$_POST["txtdegree"];
$_desc=$_POST["txtdesc"];
$_course=$_POST["selcourse"];
$_desig=$_POST["txtdesig"];
$_img="../resources/faculty/".basename($_FILES["txtimg"]["name"]);
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"] , $_img ))
{
require '../shared/faculty_db.php';
$obj=new faculty_db();
$res=$obj->updateFaculty($_email,$_name,$_id,$_img,$_course,$_desig,$_degree,$_desc);
if($res)
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
	echo "update login_tbl set pk_login_email_id='".$_email."',login_enrolno='".$_enrol."',login_profile='".$_img."',login_uname='".$_name."',login_passwd='".$_password."',login_type=".$_type." ,login_approve='".$_approve."' where pk_login_email_id='".$_email."' ";
	if($res_l)
	{ 
	header('location:faculty.php');
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
	<h2>  Record Not Inserted,<br> Please Try Again !!!</h2>
	<br><button class="btn btn-default btn-lg"><a href="faculty_insert.php">Back</a></button>
	</div>
	';
}
}
}
?>
