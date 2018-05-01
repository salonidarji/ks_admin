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
$res=$obj->insertStudent($_rno,$_email,$_name,$_enrol,$_mo_no,$_gender,$_year,$_sem,$_course); 

if($res >0 && $error==0)
{
	$_type=0;
	$_img="null";
	$_password=rand(1000,9999);
	echo "pass=".$_password;
	$_approve="pending";
	require '../shared/login_db.php';
	$obj_l=new login_db();
	$res_l=$obj_l->insertLogin($_email,$_enrol,$_img,$_name,$_password,$_type,$_approve);
	if($res_l >0 && $error==0)
	{ 
		//ahiyathi
   
     
		include '../PHPMailer/demo1.php';
		//ahiya
   
	header('location:student.php');
	 }
	else{
		echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> '.$msg.'<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="student_insert.php">Back</a></button>
	</div>
	';
	} 
	//echo "INSERT INTO login_tbl values ( '". $_email ."',  '". $_enrol ."',  '". $_profile ."','". $_name ."','". $_password ."',".$_type.",'".$_approve."')";
}
else
{
    echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> '.$msg.'<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="student_insert.php">Back</a></button>
	</div>
	';
   // echo "INSERT INTO student_tbl VALUES (".$_rno.",'".$_email."','".$_name."','".$_enrol."','".$_mo_no."','".$_gender."',".$_year.")";
	
}
}
?>


