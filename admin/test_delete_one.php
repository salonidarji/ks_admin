<?php

	$_id=$_GET["id"];
	require '../shared/test_db.php';
	$_obj=new test_db();
	$res=$_obj->deleteTestOne($_id);
	
	if($res)
	{
		header('location:test.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>