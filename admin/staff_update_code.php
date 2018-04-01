 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_date=$_POST["txtdate"];
$_designation=$_POST["seldes"];

require '../shared/staff_db.php';
$obj=new staff_db();
$res=$obj->updateStaff($_id,$_email,$_name,$_date,$_designation);
if($res)
{
	header('location:staff.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="staff_update.php">Back</a></button>
	</div>
	';
}


}

?>