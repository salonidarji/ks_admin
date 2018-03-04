<?php

	$_id=$_GET["id"];
	require '../shared/gallary_db.php';
	$_obj=new gallary_db();
	$res=$_obj->deleteGallaryOne($_id);
	
	if($res)
	{
		header('location:gallary.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>