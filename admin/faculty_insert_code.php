  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
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
$res=$obj->insertFaculty($_email,$_name,$_id,$_img,$_course,$_desig,$_degree,$_desc,$_teach_exp,$_phd,$_paper,$_specialization,$_activities);
if($res)
{
	$_type=2;
	$_password=rand(1000,9999);
	echo "pass=".$_password;
	$_approve="pending";
	$_enrol="null";
	require '../shared/login_db.php';
	$obj_l=new login_db();
	$res_l=$obj_l->insertLogin($_email,$_enrol,$_img,$_name,$_password,$_type,$_approve);
	echo "res_l=".$res_l;
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
		echo "INSERT INTO login_tbl values ( '". $_email ."',  '". $_enrol ."',  '". $_img ."','". $_name ."','". $_password ."',".$_type.",'".$_approve."')";

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