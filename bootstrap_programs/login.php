<?php 

session_start();
?>

<html>
<head>
<script src="js\jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css\bootstrap-theme.min.css">
<script src="js\bootstrap.min.js"></script>

</head>
<body>

<?php 

$status="hidden";
$err_status="0";

if(empty($_POST["txtname"]))
{
$err_name= "please fill up the name";
$err_status_name="1";
$status="hidden";
}
else{
$_SESSION["name"]=$_POST["txtname"];
$status=" ";
$err_status_name="0";
}

if(empty($_POST["txtpwd1"] || $_POST["txtconfpwd"]  ))
{
$err_pwd= "plaese fill up password";
$err_status_pwd="1";
$status="hidden";
}

else if($_POST["txtpwd1"] != $_POST["txtconfpwd"])
{
$err_pwd= "password are not same";
$err_status_pwd="1";
$status="hidden";
}
else{
$_SESSION["pwd1"]=$_POST["txtpwd1"];
$_SESSION["pwd2"]=$_POST["txtconfpwd"];
$status=" ";
$err_status_pwd="0";
}

if(empty($_POST["txtdate"]))
{
$err_date= "please fill up the birthdate";
$err_status_date="1";
$status="hidden";
}
else{
$status=" ";
$err_status_date="0";
}

if(empty($_POST["txtemail"]))
{
$err_email= "please fill up the email";
$err_status_email="1";
$status="hidden";
}
else{
$status=" ";
$err_status_email="0";
}
?>

<div class="alert alert-danger" role="alert" <?php if($err_status_name=="0"){ echo "hidden"; } else {echo " "; } ?> >
 <?php echo $err_name; ?>
</div>

<div class="alert alert-danger" role="alert" <?php if($err_status_pwd=="0"){ echo "hidden"; } else {echo " "; } ?> >
 <?php echo $err_pwd; ?>
</div>

<div class="alert alert-danger" role="alert" <?php if($err_status_date=="0"){ echo "hidden"; } else {echo " "; } ?> >
 <?php echo $err_date; ?>
</div>

<div class="alert alert-danger" role="alert" <?php if($err_status_email=="0"){ echo "hidden"; } else {echo " "; } ?> >
 <?php echo $err_email; ?>
</div>



<!-- Button trigger modal -->

<div class="jumbotron" <?php echo $status; ?> >
  <h1>Hello, <?php echo $_POST["txtname"]; ?></h1>
  <p align="center">Select The Option from Below...</p>
 

<p align="center"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myLogin">
  Log-In
</button>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myInfo">
  Show My Details
</button></p>
</div>
<!-- Modal -->
<div  class="modal fade " id="myLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title " id="myModalLabel">LOG-IN FORM</h4>
      </div>
      <div class="modal-body">
				<form name="login-form" action="login.php" method="post">
				<div class="form-group alert alert-info">
					
						<input type="text" name="txtuname" class="form-control" placeholder="Enter UserName here"><br>
						<input type="text" name="txtpwd" class="form-control" placeholder="Enter Password here">
					
				
				</div>
				
	   
	   
	   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" name="login-submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<?php 


if(isset($_POST["login-submit"]))
{
	if($_SESSION["name"]==$_POST["txtuname"])
	
	{
		if($_SESSION["pwd1"]==$_POST["txtpwd"])
		{
		$success="login successful";
		$suc_status="1";
		}
		else
		{
		$success="password is incorrect";
		$suc_status="1";
		}
	}
	else
	{
	$success= "username is incorrect";
	$suc_status="1";
	}
}

?>
<div class="alert alert-success" role="alert" <?php if($suc_status=="1"){ echo " "; } else {echo " "; } ?> >
 <?php echo $success; ?>
</div>


</form>



<div  class="modal fade " id="myInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title " id="myModalLabel">Your Information</h4>
      </div>
      <div class="modal-body">
				<form name="login1-form" action="login.php" method="post">
				<div class="form-group alert alert-info">
					
					NAME:	<input type="text" class="form-control" value="<?php echo $_POST["txtname"]; ?>  "><br>												
					MOBILE NO. :	<input type="text" class="form-control" value="<?php echo $_POST["txtmo"]; ?>  "><br>
					BIRTHDATE:	<input type="text" class="form-control" value="<?php echo $_POST["txtdate"]; ?>  "><br>
					URL:	<input type="text" class="form-control" value="<?php echo $_POST["txturl"]; ?>  "><br>
						EMAIL-ID:<input type="text" class="form-control" value="<?php echo $_POST["txtemail"]; ?>  "><br>
						
				
				</div>
				</form>
	   
	   
	   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </div>
</div>




</body>


</html>
