
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/material_db.php';
	$_obj=new material_db();
	$res=$_obj->deleteMaterial($_arr);
	
	if($res)
	{
		header('location:material.php');
	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}

?>
