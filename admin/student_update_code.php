<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_rno=$_POST["txtrno"];
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_mo_no=$_POST["txtmo_no"];
$_gender=$_POST["selgender"];
$_year=$_POST["selyear"];

require '../shared/student_db.php';
$obj=new student_db();
$res=$obj->updateStudent($_rno,$_email,$_name,$_mo_no,$_gender,$_year); 

if($res)
{
    header('location:student.php');
}
else
{
    echo "VALUES NOT Updated";
    
	
}
}
?>


