 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
include 'validation.php';
$msg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
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
$_date=$_POST["txtdate"];
if($_POST["seldes"]=="0"){
	$msg= $msg."<br>Please Select Designation";
					$_designation="";
					$error=1;
			
				}
				else{
					$_designation=$_POST["seldes"];
				}



require '../shared/staff_db.php';
$obj=new staff_db();
$res=$obj->insertStaff($_id,$_email,$_name,$_date,$_designation);
if($res && $error==0)
{
	header('location:staff.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2>'.$msg.'<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="staff_insert.php">Back</a></button>
	</div>
	';
}


}

?>