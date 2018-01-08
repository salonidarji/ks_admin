<?php

	$_id=$_GET["id"];
	require '../shared/slider_db.php';
	$_obj=new slider_db();
	$res=$_obj->deleteSliderOne($_id);
	
	if($res)
	{
		header('location:slider.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>