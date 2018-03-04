<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_url="../resources/video/".basename($_FILES["txturl"]["name"]);

if(move_uploaded_file($_FILES["txturl"]["tmp_name"] , $_url ))
{
require '../shared/video_db.php';
$obj=new video_db();
$res=$obj->updateVideo($_id,$_title,$_desc,$_url);
if($res)
{
	header('location:video.php');
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