
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/notice_db.php';
	$_obj=new notice_db();
	$res=$_obj->deleteNotice($_arr);
	
	if($res)
	{
		header('location:notice.php');
	}
	else
	{
        echo 'Record not deleted';
	
		
	}
	
}

?>
