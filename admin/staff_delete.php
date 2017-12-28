
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/staff_db.php';
	$_obj=new staff_db();
	$res=$_obj->deleteStaff($_arr);
	
	if($res)
	{
		header('location:staff.php');
	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}

?>
