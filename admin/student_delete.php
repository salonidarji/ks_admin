
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/student_db.php';
	$_obj=new student_db();
	$res=$_obj->deleteStudent($_arr);
	
	if($res)
	{
		require '../shared/login_db.php';
		$_obj_login=new login_db();
		$res_login=$_obj_login->deleteLogin($_arr);
		if($res_login){
		header('location:student.php');
		}
				else{
			echo 'error while deleting login';
				}
	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}

?>
