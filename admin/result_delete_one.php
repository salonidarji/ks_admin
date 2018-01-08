<?php

	$_id=$_GET["id"];
	require '../shared/result_db.php';
	$_obj=new result_db();
	$res=$_obj->deleteResultOne($_id);
	
	if($res)
	{
		header('location:result.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>