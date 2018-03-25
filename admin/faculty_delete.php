
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/faculty_db.php';
	$_obj=new faculty_db();
	$res=$_obj->deleteFaculty($_arr);
	
	if($res)
	{
		header('location:faculty.php');
	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}
?>