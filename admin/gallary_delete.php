
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/gallary_db.php';
	$_obj=new gallary_db();
	$res=$_obj->deleteGallary($_arr);
	
	if($res)
	{
		header('location:gallary.php');
	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}

?>
