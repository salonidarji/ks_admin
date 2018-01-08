<?php

	$_id=$_GET["id"];
	require '../shared/video_db.php';
	$_obj=new video_db();
	$res=$_obj->deleteVideoOne($_id);
	
	if($res)
	{
		header('location:video.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>