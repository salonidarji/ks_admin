<?php

	$_id=$_GET["id"];
	require '../shared/material_db.php';
	$_obj=new material_db();
	$res=$_obj->deleteMaterialOne($_id);
	
	if($res)
	{
		header('location:material.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>