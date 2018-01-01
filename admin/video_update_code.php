<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_url=$_POST["txturl"];
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

?>