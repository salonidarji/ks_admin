<?php

	$_id=$_GET["id"];
	require '../shared/student_db.php';
	$_obj=new student_db();
	$res=$_obj->deleteStudentOne($_id);
	
	if($res)
	{
		require '../shared/login_db.php';
		$_obj_login=new login_db();
		$res_login=$_obj_login->deleteLoginOne($_id);
		if($res_login){
		header('location:student.php');
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