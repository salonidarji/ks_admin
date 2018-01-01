<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_img=$_POST["txtimg"];
$_cnt=$_POST["txtcnt"];
$_time=$_POST["txttime"];
require '../shared/slider_db.php';
$obj=new slider_db();
$res=$obj->updateSlider($_id,$_img,$_cnt,$_time);
if($res)
{
	header('location:slider.php');
}
else
{
echo 'Record Not Updated';
echo "update slider_tbl set pk_slider_id=".$_id.",slider_img='".$_img."',slider_count=".$_cnt.",slider_time=".$_time." where pk_slider_id=".$_id;
}


}

?>