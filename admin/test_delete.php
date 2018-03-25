
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$arr=implode("," , $_POST["chkdel"]);
	require '../shared/test_db.php';
	$_obj=new test_db();
	$res=$_obj->deleteTest($arr);
	
	if($res)
	{
		header('location:test.php');
	}
	else
	{
        echo 'Record not deleted';
		echo "delete from test_tbl where pk_test_id in ($arr)";
		
	}
	
}

?>
