<?php

	$_id=$_GET["rno"];
	require '../shared/student_db.php';
	$_obj=new student_db();
	$res=$_obj->deleteStudentOne($_id);
	
	if($res)
	{
		header('location:student.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>