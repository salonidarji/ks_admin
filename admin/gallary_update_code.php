<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
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
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="gallary_update.php">Back</a></button>
	</div>
	';
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="gallary_update.php">Back</a></button>
	</div>
	';
	
}


}

?>