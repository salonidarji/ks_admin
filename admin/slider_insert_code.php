<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_img="../resources/slider/".basename($_FILES["txtimg"]["name"]);
$_cnt=$_POST["txtcnt"];
$_time=$_POST["txttime"];

if(move_uploaded_file($_FILES["txtimg"]["tmp_name"] , $_img ))
{
require '../shared/slider_db.php';
$obj=new slider_db();
$res=$obj->insertSlider($_id,$_img,$_cnt,$_time);
if($res)
{
	header('location:slider.php');
}
else
{
echo 'Record Not Inserted';
}
}
else{
	echo 'error in move upload file';
	
}


}

?>