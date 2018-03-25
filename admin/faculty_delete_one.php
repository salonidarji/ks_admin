<?php
	$_id=$_GET["id"];
	require '../shared/faculty_db.php';
	$_obj=new faculty_db();
	$res=$_obj->deleteFacultyOne($_id);
	
	if($res)
	{
		header('location:faculty.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}
?>