<?php 

session_start();
?>
<html>
<head>

<script src="js\jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css\bootstrap-theme.min.css">
<script src="js\bootstrap.min.js"></script>
<!--

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjlgfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

-->
</head>
<body class="container">
<div class="table-responsive">

<table class="table">
<form name="sign-in-form" method="post" action="login.php" class="form-horizontal">
<div class="alert alert-info" role="alert"><h1><center>Sign-In Form</center></h1></div>


<div class="form-group">
	<tr><td><label for="basic-url" class="col-lg-4">Enter your name</label></td>
  <td><div class="col-lg-8"><input type="text" class="form-control" name="txtname" placeholder="Enter User name here" aria-describedby="basic-addon1"></td></tr>


</div></div>


<div class="form-group">
<tr><td><label for="basic-url"  class="col-lg-4">Enter your Password</label></td>
  <td><div class="col-lg-8"><input type="text" class="form-control" name="txtpwd1" placeholder="6 Digit AlphaNumeric Password Required"></td></tr>
 </div>
</div>



<div class="form-group">
<tr><td><label for="basic-url" class="col-lg-4">Confirm your Password</label></td>
  <td><div class="col-lg-8"><input type="text" class="form-control" name="txtconfpwd" placeholder="Re-Enter Above Password"></td></tr>
 </div>
</div>

<div class="form-group">
<tr><td><label for="basic-url" class="col-lg-4">Enter your Birthdate</label></td>
  <td><div class="col-lg-8"><input type="text" class="form-control" name="txtdate" placeholder="dd-mm-yyyy"></td></tr>
 </div>
</div>


    <div class="form-group">
   
        <tr> <td ><label for="basic-url" class="col-lg-4">Select Your Gender</label></td>
		<td><div class="col-lg-8"><input type="radio" name="rbmale">Male &nbsp; <input type="radio" name="rbfemale" >Female</td>
      </div>
      </tr>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->



<div class="form-group">
<tr><td><label for="basic-url" class="col-lg-4">Your personal URL</label></td>
 <td> <div class="col-lg-8"><input type="text" class="form-control" id="basic-url" name="txturl" placeholder="example: https://www.xyz.com/" aria-describedby="basic-addon3"></td></tr>
</div>
 </div>



<tr><td colspan="4"><div class="alert alert-success" role="alert">Contact Information</div></td></tr>
<div class="form-group">
  <tr>
  <td><label for="basic-url" class="col-lg-4">Enter Email-Id</label></td>
  <td><div class="col-lg-8"><input type="text" class="form-control" placeholder="Email-Id here" name="txtemail" aria-describedby="basic-addon4"></td>
  </div></tr>
</div>
<div class="form-group">
  <tr>
  <td><label for="basic-url" class="col-lg-4">Enter Mobile Number</label></td>
  <td><div class="col-lg-8"><input type="text" class="form-control" placeholder="Mobile Number here" name="txtmo" aria-describedby="basic-addon4"></td>
  </div></tr>
</div>

<div class="btn-group" role="group" aria-label="...">
<tr>
			<td align="center" > <button  name="btnsub" type="submit" class="btn btn-success btn-lg glyphicon glyphicon-thumbs-up" data-toggle="modal" data-target="#myModal">
				Submit My Detail
			</button></td>
 <td align="center"><button  type="button" class="btn btn-warning btn-lg glyphicon glyphicon-remove">Cancel</button></td></tr>
 </div> 
 </form>
  
  </table>
  </div>

  </body>
</html>
