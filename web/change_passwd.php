<?php require 'top.php'; ?>
<?php
if(!isset($_SESSION["eid"])){
echo '<h1><div align="center" class="alert alert-danger">
<span class="glyphicon glyphicon-warning-sign">  First Do Sign-In</span>
</div></h1>';
}
else{
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h3 class="tittle-w3l">Change Password
       
       <span class="heading-style">
           <i></i>
           <i></i>
           <i></i>
       </span>
       </h3>
   <div class="container">
       <div class="product-sec1">
<div class="row">
      
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$opaw=$_POST["txtpas1"];
$npaw=$_POST["txtpas2"];
$cpaw=$_POST["txtpas3"];
if($npaw==$cpaw)
 {

$id=$_SESSION["eid"];
 //require '../shared/login_db.php';
 $obj=new login_db();
 $res=$obj->changePass($id,$npaw);
 if($res)
 {
  echo '<br><br><br><br>
	<div align="center"  class="alert-success "><h3><span class="glyphicon glyphicon-alert">
	 Password Successfully Changed</h3>
  
	</div>
  ';
 
 }
 else{
  echo '<br><br><br><br><br><br>
	<div align="center"  class="alert-danger "><h3><span class="glyphicon glyphicon-alert">
	 Invalid Password</h3>

	</div>
	';
 }
} 
else
{
  echo '<br><br><br><br><br><br>
	<div align="center"  class="alert-danger "><h3><span class="glyphicon glyphicon-alert">
	 Password Not Matched</h3>

	</div>
	';
}  
}
?>
<div class="col-md-3">
    
</div>
<div class="col-md-6">
<!-- Profile Image -->
<div class="box box-primary">
<div class="register-box-body">
<form action="change_passwd.php" method="post">
<br>
<div class="form-group">

        <input type="password" required name="txtpas1" class="form-control" placeholder=" Old Password">
       
      </div>
      <br>
      <div class="form-group">
        <input type="password" required name="txtpas2" class="form-control" placeholder="New Password">
        
      </div>
      <br>
      <div class="form-group ">
        <input type="password" required name="txtpas3" class="form-control" placeholder="Conform Password">
        
      </div>
 
      <div class="col-xs-3">
    
    </div>
      <div class="col-xs-6">
          <button type="submit" align="center" class="btn btn-primary btn-block btn-flat">Change</button>
        </div>

</form>
 
      </div>
</div>
      </div>
      <div class="col-md-3">
    
      </div>  
      </div>
      </div>  
    </div>
    
      </section>
      </div>
      
<?php } require 'bottom.php'; ?>