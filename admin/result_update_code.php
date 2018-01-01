<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_type=$_POST["seltype"];
$_email=$_POST["txtemail"];
$_sub1=$_POST["txtsub1"];
$_sub1_marks=$_POST["txtsub1_marks"];
$_sub2=$_POST["txtsub2"];
$_sub2_marks=$_POST["txtsub2_marks"];
$_sub3=$_POST["txtsub3"];
$_sub3_marks=$_POST["txtsub3_marks"];
$_sub4=$_POST["txtsub4"];
$_sub4_marks=$_POST["txtsub4_marks"];
$_sub5=$_POST["txtsub5"];
$_sub5_marks=$_POST["txtsub5_marks"];
$_sub6=$_POST["txtsub6"];
$_sub6_marks=$_POST["txtsub6_marks"];
$_sub7=$_POST["txtsub7"];
$_sub7_marks=$_POST["txtsub7_marks"];
$_sub8=$_POST["txtsub8"];
$_sub8_marks=$_POST["txtsub8_marks"];
$_sub9=$_POST["txtsub9"];
$_sub9_marks=$_POST["txtsub9_marks"];

require '../shared/result_db.php';
$obj=new result_db();
$res=$obj->updateResult($_id,$_type,$_email,$_sub1,$_sub1_marks,$_sub2,$_sub2_marks,$_sub3,$_sub3_marks,$_sub4,$_sub4_marks,$_sub5,$_sub5_marks,$_sub6,$_sub6_marks,$_sub7,$_sub7_marks,$_sub8,$_sub8_marks,$_sub9,$_sub9_marks);
if($res)
{
	header('location:result.php');
}
else
{
echo 'Record Not Updated';
}


}

?>