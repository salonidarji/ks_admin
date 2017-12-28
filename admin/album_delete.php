
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/album_db.php';
	$_obj=new album_db();
	$res=$_obj->deleteAlbum($_arr);
	
	if($res)
	{
		header('location:album.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}
	
}

?>
