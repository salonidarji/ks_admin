<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_url="../resources/gallary/".basename($_FILES["txturl"]["name"]);
if(move_uploaded_file($_FILES["txturl"]["tmp_name"] , $_url ))
{
require '../shared/album_db.php';
$obj=new album_db();
$res=$obj->updateAlbum($_id,$_url);
if($res)
{
	header('location:album.php');
}
else
{
echo 'Record Not Updated';
}
}
else{
	echo 'error in move upload file';
	
}

}

?>