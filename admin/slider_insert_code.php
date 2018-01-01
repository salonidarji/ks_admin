<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_img=$_POST["txtimg"];
$_cnt=$_POST["txtcnt"];
$_time=$_POST["txttime"];
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

?>