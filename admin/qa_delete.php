
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/qa_db.php';
	$_obj=new qa_db();
	$res=$_obj->deleteQa($_arr);
	
	if($res)
	{
		header('location:qa.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}
	
}



?>
