
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/faq_db.php';
	$_obj=new faq_db();
	$res=$_obj->deleteAllFaq($_arr);
	
	if($res)
	{
		header('location:faq.php');
	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}

?>
