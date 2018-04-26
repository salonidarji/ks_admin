<?php
	$_id=$_GET["id"];
	require '../shared/faculty_db.php';
	$_obj=new faculty_db();
	$res=$_obj->deleteFacultyOne($_id);
	
	if($res)
	{
		require '../shared/login_db.php';
		$_obj_login=new login_db();
		$res_login=$_obj_login->deleteLoginOne($_id);
		if($res_login){
		header('location:faculty.php');
		}
		else{
			echo 'error while deleting login';
		}
	}
	else
	{
        echo 'Record not deleted';
		
	}
?>