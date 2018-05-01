<?php

	$_id=$_GET["id"];
	require '../shared/faq_db.php';
	$_obj=new faq_db();
	$res=$_obj->deleteFaq($_id);
	
	if($res)
	{
		header('location:faq.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>