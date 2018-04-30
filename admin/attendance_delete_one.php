<?php
	$_id=$_GET["id"];
	require '../shared/attendance_db.php';
	$_obj=new attendance_db();
	$res=$_obj->deleteAttendanceOne($_id);
	
	if($res)
	{
	
		header('location:attendance_show.php');
    }
	else
	{
        echo 'Record not deleted';
		
	}
?>