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
echo 'Record Not Updated';
}


}

?>