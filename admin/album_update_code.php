<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$_oldimg=$_SESSION["img"];
$_id=$_POST["txtid"];

if((basename($_FILES["txturl"]["name"]))==""){
	$_url=$_oldimg;
	$_flag=0;
	}
	else{
		if($_oldimg!=""){
			unlink($_oldimg);
		}
		$_url="../resources/gallary/".basename($_FILES["txturl"]["name"]);
	$_flag=1;
	}
if(move_uploaded_file($_FILES["txturl"]["tmp_name"] , $_url ))
{
require '../shared/album_db.php';
$obj=new album_db();
$res=$obj->updateAlbum($_id,$_url);
if($res)
{
	header('location:album.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="album_update.php?id='.$_id.'">Back</a></button>
	</div>
	';
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> please Select Image !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="album_update.php?id='.$_id.'">Back</a></button>
	</div>
	';
	
}

}

?>