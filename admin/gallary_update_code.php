<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_title=$_POST["txttitle"];
$_type=$_POST["txttype"];
$_album_id=$_POST["txtaid"];
$_url="../resources/gallary/".basename($_FILES["txturl"]["name"]);

if(move_uploaded_file($_FILES["txturl"]["tmp_name"] , $_url ))
{
require '../shared/gallary_db.php';
$obj=new gallary_db();
$res=$obj->updateGallary($_id,$_type,$_album_id,$_title,$_url);
if($res)
{
	header('location:gallary.php');
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