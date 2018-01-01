
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/video_db.php';
	$_obj=new video_db();
	$res=$_obj->deleteVideo($_arr);
	
	if($res)
	{
		header('location:video.php');
	}
	else
	{
        echo 'Record not deleted';
	
		
	}
	
}

?>
