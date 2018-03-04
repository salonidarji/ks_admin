<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_degree=$_POST["txtdegree"];
$_date=$_POST["txtdate"];
$_resume="../resources/faculty/".basename($_FILES["txtresume"]["name"]);

if(move_uploaded_file($_FILES["txtresume"]["tmp_name"] , $_resume ))
{
require '../shared/faculty_db.php';
$obj=new faculty_db();
$res=$obj->insertFaculty($_email,$_name,$_id,$_degree,$_date,$_resume);
if($res)
{
/*	$_type=2;
	require '../shared/login_db.php';
	$obj_l=new login_db();
	$res_l=$obj_l->insertType($_email,$_name,$_type);
	if($res_l)
	{ */

	header('location:faculty.php');
	/* }
	else{
		echo 'Error occured while assigning faculty type';
	}  */
}
else
{
echo 'Record Not Inserted';
}
}
else{
	echo 'error in move uploaded file';
}


}

?>