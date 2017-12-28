<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_email=$_POST["txtemail"];
$_degree=$_POST["txtdegree"];
$_date=$_POST["txtdate"];
$_resume=$_POST["txtresume"];

require '../shared/faculty_db.php';
$obj=new faculty_db();
$res=$obj->updateFaculty($_email,$_id,$_degree,$_date,$_resume);
if($res)
{
	header('location:faculty.php');
}
else
{
echo 'Record Not Updated';
}


}

?>