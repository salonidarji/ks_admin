<?php require 'top.php'; ?>
<?php if(!isset($_SESSION["eid"])){
  
}
else{

?>
<?php
      if($_SESSION["login_type"]==2){
        echo '<div class=" btn-lg btn-danger" align="center">
          You are not allowed to access this module
        </div>';
      }
      else{
     ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
<?php 
$_id=$_GET["id"];
//require '..\shared\login_db.php';
/*$_obj=new login_db();
$result=$_obj->getlogin($que_id);
*/
$cnn= login_db::connect();
$sql="select * from login_tbl where pk_login_email_id='".$_id."' ";

$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{

$_email=$row["pk_login_email_id"];
$_enrol=$row["login_enrolno"];
$_name=$row["login_uname"];
$_password=$row["login_passwd"];
$_type=$row["login_type"];
$_profile=$row["login_profile"];
$_approve=$row["login_approve"];
$_SESSION["img"]=$_profile;

}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="login_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Email :</td><td><input type="email" name="txtemail" required  class="form-control" value="<?php echo $_email; ?>"/> </td></tr>
<td>Enrollment No. :</td><td><input type="number" name="txtenrol"  class="form-control" value="<?php echo $_enrol; ?>" /> </td></tr>
<tr><td>Profile :</td><td><input type="file" name="txtprofile"   class="form-control" value="<?php echo $_profile; ?>"/> </td></tr>
<tr><td>Name:</td><td><input type="text" name="txtname" required class="form-control" value="<?php echo $_name; ?>"/> </td></tr>
<tr><td>Password:</td><td><input type="password" name="txtpass" required class="form-control" value="<?php echo $_password; ?>"/> </td></tr>
<tr><td>Type:</td><td>

                        <select class="form-control" name="seltype" required>
                        <option value="0" <?=$_type == '0' ? ' selected="selected"' : '';?>>Student</option>
                        <option value="1" <?=$_type == '1' ? ' selected="selected"' : '';?>>Admin</option>
                        <option value="2" <?=$_type == '2' ? ' selected="selected"' : '';?>>login / Faculty</option>
                        
                       
                        </select>
                    </td></tr>

                    <tr><td>Approve Status:</td><td>

<select class="form-control" name="selapprove" required>
<option value="0">--Select--</option>
<option value="pending" <?=$_approve == 'pending' ? ' selected="selected"' : '';?>>Pending</option>
<option value="approved" <?=$_approve == 'approved' ? ' selected="selected"' : '';?>>Approved</option>


</select>
</td></tr>

<tr><td  colspan="2"><input type="submit" name="btnupdate" value="UPDATE"class="form-control btn  btn-info"/></td></tr>
</div>
</form>
</table>
</div>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php } ?>
<?php } require 'bottom.php'; ?>