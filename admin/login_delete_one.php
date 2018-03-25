<?php

	$_id=$_GET["id"];
	require '../shared/login_db.php';
	$_obj=new login_db();
	$res=$_obj->deleteLoginOne($_id);
	
	if($res)
	{
		header('location:login.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>