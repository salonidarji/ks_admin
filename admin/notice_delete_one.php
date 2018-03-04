<?php

	$_id=$_GET["id"];
	require '../shared/notice_db.php';
	$_obj=new notice_db();
	$res=$_obj->deleteNoticeOne($_id);
	
	if($res)
	{
		header('location:notice.php');
	}
	else
	{
        echo 'Record not deleted';
	echo "delete from notice_tble where pk_notice_id =".$_id;	
	}

?>