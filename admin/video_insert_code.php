 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id="null";
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_url=$_POST["txturl"];
$pos=strpos($_url,"v=");
$_url="https://www.youtube.com/embed/".substr($_url,$pos+2,strlen($_url));


echo "<br>url=".$_url;

require '../shared/video_db.php';
$obj=new video_db();
$res=$obj->insertVideo($_id,$_title,$_desc,$_url);
if($res)
{
	header('location:video.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="video_insert.php">Back</a></button>
	</div>
	';
	//echo "INSERT INTO video_tbl VALUES (". $_id .",'" . $_title. "','" . $_desc . "','" . $_url . "') ";

}

}

?>