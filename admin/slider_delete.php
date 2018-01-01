
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/slider_db.php';
	$_obj=new slider_db();
	$res=$_obj->deleteSlider($_arr);
	
	if($res)
	{
		header('location:slider.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}
	
}

?>
