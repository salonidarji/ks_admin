<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_name=$_POST["txtname"];
require '../shared/album_db.php';
$obj=new album_db();
$res=$obj->updateAlbum($_id,$_name);
if($res)
{
	header('location:album.php');
}
else
{
echo 'Record Not Updated';
}


}

?>