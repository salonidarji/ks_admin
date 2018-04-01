<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_url="../resources/gallary/".basename($_FILES["txturl"]["name"]);
if(move_uploaded_file($_FILES["txturl"]["tmp_name"] , $_url ))
{
require '../shared/album_db.php';
$obj=new album_db();
$res=$obj->insertAlbum($_id,$_url);
if($res)
{
	header('location:album.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="album_insert.php">Back</a></button>
	</div>
	';
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please select Image !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="album_insert.php">Back</a></button>
	</div>
	';
	
}

}

?>