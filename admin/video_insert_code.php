<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_url="../resources/video/".basename($_FILES["txturl"]["name"]);
/*
echo 'path='.$_FILES["txturl"]["tmp_name"];
$_extension=pathinfo($_FILES["txturl"]["name"],PATHINFO_EXTENSION);
echo "ext=".$_extension;
if(strtolower($_extension)=="mp4")
{*/
if(move_uploaded_file($_FILES["txturl"]["tmp_name"] , $_url ))
{
require '../shared/video_db.php';
$obj=new video_db();
$res=$obj->insertVideo($_id,$_title,$_desc,$_url);
if($res)
{
	header('location:video.php');
}
else
{
echo 'Record Not Inserted';
}
}
else{
	echo 'error in move upload';
}
/*
}
else{
	echo 'only mp4 is allowed';
}
*/


}

?>