 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
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
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="video_update.php">Back</a></button>
	</div>
	';

}

}

?>