<?php

	$_email=$_GET["email"];
	require '../shared/login_db.php';
$obj=new login_db();
$res=$obj->updateApproveOne($_email);
	
	if($res)
	{
		header('location:starter.php');
	}
	else
	{
        echo 'Record not approved';
		
	}

?>