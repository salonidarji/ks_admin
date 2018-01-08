
<?php

	$_id=$_GET["id"];
	require '../shared/qa_db.php';
	$_obj=new qa_db();
	$res=$_obj->deleteQaOne($_id);
	
	if($res)
	{
		header('location:qa.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>
