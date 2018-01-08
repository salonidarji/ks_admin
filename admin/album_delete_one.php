<?php

	$_id=$_GET["id"];
	require '../shared/album_db.php';
	$_obj=new album_db();
	$res=$_obj->deleteAlbumOne($_id);
	
	if($res)
	{
		header('location:album.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>