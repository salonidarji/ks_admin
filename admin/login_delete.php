
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode("','",$_POST["chkdel"]);
	require '../shared/login_db.php';
	$_obj=new login_db();
	$res=$_obj->deleteLogin($_arr);
	
	if($res)
	{
		header('location:login.php');
	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}

?>
