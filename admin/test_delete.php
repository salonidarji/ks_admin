
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/test_db.php';
	$_obj=new test_db();
	$res=$_obj->deleteTest($_arr);
	
	if($res)
	{
		header('location:test.php');
	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}

?>
