<?php 

session_start();
?>


<?php 
$err_status="hidden";
	$err_name=" ";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	if(empty($_POST["txtname"]))
	{
	$err_status=" ";
	$err_name="fill up the name field";
	
	}
	else if(!preg_match("/^[a-zA-Z]*$/",$_POST["txtname"]))
			{
			$err_status=" ";
			$err_name="only small character in the name field"; 
			}
	else
	{
	
			
	$err_status="hidden";
	$_SESSION["name1"]=$_POST["txtname"];
	setcookie("name",$_POST["txtname"]);
	}

}



?>

<html>
<head>

<script src="js\jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css\bootstrap-theme.min.css">
<script src="js\bootstrap.min.js"></script>


</head>
<body class="container">


<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" >

<div class="form_group">
<input type="text" name="txtname" class="form-control" placeholder="enter name">

</div>

<div <?php echo $err_status; ?> class="alert alert-danger">
<?php echo $err_name; ?>

</div>

<div class="form_group">
<input type="submit" name="btnsub" class="btn btn-success" value="click me">

</div>



</form>
</body>
</html>
