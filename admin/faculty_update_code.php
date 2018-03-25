<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_name=$_POST["txtname"];
$_email=$_POST["txtemail"];
$_degree=$_POST["txtdegree"];
$_date=$_POST["txtdate"];
$_resume="../resources/faculty/".basename($_FILES["txtresume"]["name"]);
if(move_uploaded_file($_FILES["txtresume"]["tmp_name"] , $_resume ))
{
require '../shared/faculty_db.php';
$obj=new faculty_db();
$res=$obj->updateFaculty($_email,$_name,$_id,$_degree,$_date,$_resume);
if($res)
{
	header('location:faculty.php');
}
else
{
echo 'Record Not Updated';
echo "update faculty_tbl set fk_email_id='".$_email."',faculty_name='".$_name."' pk_faculty_id=".$_id.",faculty_degree='".$_degree."',faculty_join_date='".$_date."',faculty_resume='".$_resume."'  where pk_faculty_id=".$_id;
}
}
else{
	echo 'error in move uploaded file';
}
}
?>