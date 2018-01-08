<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_img=$_POST["txtimg"];
$_op1=$_POST["txtop1"];
$_op2=$_POST["txtop2"];
$_op3=$_POST["txtop3"];
$_op4=$_POST["txtop4"];
$_ans=$_POST["txtans"];
$_year=$_POST["selyear"];
$_email="null";
//$_email=$_SESSION["email"];
require '../shared/qa_db.php';
$obj=new qa_db();
$res=$obj->insertQa($_id,$_title,$_desc,$_img,$_op1,$_op2,$_op3,$_op4,$_ans,$_year,$_email);
if($res)
{
	header('location:qa.php');
}
else
{
echo 'Record Not Inserted';
}


}

?>