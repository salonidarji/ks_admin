
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/student_db.php';
	$_obj=new student_db();
	$res=$_obj->deleteStudent($_arr);
	
	if($res)
	{
		header('location:student.php');
	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}

?>
