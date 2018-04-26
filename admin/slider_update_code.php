 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_img="../resources/slider/".basename($_FILES["txtimg"]["name"]);

$_address=$_POST["seladdress"];
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"] , $_img ))
{
require '../shared/slider_db.php';
$obj=new slider_db();
$res=$obj->updateSlider($_id,$_img,$_address);
if($res)
{
	header('location:slider.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="slider_update.php">Back</a></button>
	</div>
	';
}

}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Select Image !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="slider_update.php">Back</a></button>
	</div>
	';
	
}



}

?>