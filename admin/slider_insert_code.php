 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_img="../resources/slider/".basename($_FILES["txtimg"]["name"]);
$_cnt=$_POST["txtcnt"];
$_time=$_POST["txttime"];
$_address=$_POST["seladdress"];
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"] , $_img ))
{
require '../shared/slider_db.php';
$obj=new slider_db();
$res=$obj->insertSlider($_id,$_img,$_cnt,$_time,$_address);
if($res)
{
	header('location:slider.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="slider_insert.php">Back</a></button>
	</div>
	';
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="slider_insert.php">Back</a></button>
	</div>
	';
	
}


}

?>