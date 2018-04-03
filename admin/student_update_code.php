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
$res=$obj->updateStudent($_rno,$_email,$_name,$_enrol,$_mo_no,$_gender,$_year,$_sem,$_course); 

if($res)
{
    header('location:student.php');
}
else
{
    echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="student_update.php">Back</a></button>
	</div>
	';
    
	
}
}
?>


