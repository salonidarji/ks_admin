<?php

	$_id=$_GET["id"];
	require '../shared/staff_db.php';
	$_obj=new staff_db();
	$res=$_obj->deleteStaffOne($_id);
	
	if($res)
	{
		header('location:staff.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>