 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
include 'validation.php';
$msg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(validateRno($_POST["txtrno"])){
		$_rno=$_POST["txtrno"];
		}
		else{
			$msg= $msg."<br>Invalid Roll Number is Entered";
			$_rno="";
			$error=1;
		}

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

if(validateEnrol($_POST["txtenrol"])){
	$_enrol=$_POST["txtenrol"];
	}
	else{
		$msg= $msg."<br>Invalid Enrollment Number";
		$_enrol="";
		$error=1;
	}

if(validateMobile($_POST["txtmo_no"])){
	$_mo_no=$_POST["txtmo_no"];
	}
	else{
		$msg= $msg."<br>Invalid Mobile Number is Entered";
		$_mo_no="";
		$error=1;
	}

	
	if($_POST["selgen"]=="0"){
		$msg= $msg."<br>Please Select Gender";
		$_gender="";
		$error=1;

	}
	else{
		$_gender=$_POST["selgen"];
	}

	if($_POST["selyear"]==0){
		
		$msg= $msg."<br>Please Select Year";
		$_year="";
		$error=1;
			}
			else{
				$_year=$_POST["selyear"];
			}

			if($_POST["selsem"]==0){
				$msg= $msg."<br>Please Select Semister";
						$_sem="";
						$error=1;
				
					}
					else{
						$_sem=$_POST["selsem"];
					}
			if($_POST["selcourse"]=="0"){
				$msg= $msg."<br>Please Select Course";
								$_course="";
								$error=1;
						
							}
							else{
								$_course=$_POST["selcourse"];
							}

require '../shared/student_db.php';
$obj=new student_db();
$res=$obj->updateStudent($_rno,$_email,$_name,$_enrol,$_mo_no,$_gender,$_year,$_sem,$_course); 

if($res && $error==0)
{
    header('location:student.php');
}
else
{
	require 'top.php'; 

	echo ' <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
    <br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="student_update.php?id='.$_rno.'">Back</a></button>
	</div>
	
	</section>
';
//echo "<br>update student_tbl set pk_stu_rno=".$_rno.",fk_email_id='".$_email."',stu_name='".$_name."',stu_enrolno='".$_enrol."',stu_mobile_no=' ".$_mo_no." ',stu_gender='".$_gender."',stu_year=".$_year.",stu_sem=".$_sem.",fk_course_name='".$_course."' where pk_stu_rno=".$_rno;
echo '
<!-- Main content -->
<section class="content">

  <!-- Your Page Content Here -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->';

 require 'bottom.php';  
    
	
}
}
?>


