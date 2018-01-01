
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/result_db.php';
	$_obj=new result_db();
	$res=$_obj->deleteResult($_arr);
	
	if($res)
	{
		header('location:result.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}
	
}

?>
