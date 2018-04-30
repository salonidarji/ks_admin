
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$_arr=implode("','",$_POST["chkdel"]);
	require '../shared/attendance_db.php';
	$_obj=new attendance_db();
	$res=$_obj->deleteAttendance($_arr);
	
	if($res)
	{
		
		header('location:attendance_show.php');
		
	}
	else
	{
        echo 'Record not deleted';
		echo "<br>delete from attendance_tbl where date in ('$_arr')";
		
	}
	
}
?>