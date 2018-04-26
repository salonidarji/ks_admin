<?php require 'top.php'; ?>
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
require '..\shared\staff_db.php';
/*$_obj=new staff_db();
$result=$_obj->getstaff($que_id);
*/
$cnn= staff_db::connect();
$sql="select * from staff_tbl where pk_staff_id=".$_id;

$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{

$_email=$row["fk_email_id"];
$_name=$row["staff_name"];
$_date=$row["staff_join_date"];
$_designation=$row["staff_designation"];


}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="staff_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Id:</td><td><input type="number" name="txtid" readonly class="form-control" value="<?php echo $_id; ?>" /> </td></tr>
<tr><td>Email :</td><td><input type="email" name="txtemail" required class="form-control" value="<?php echo $_email; ?>" /> </td></tr>
<tr><td>Name :</td><td><input type="text" name="txtname" required class="form-control" value="<?php echo $_name; ?>"/> </td></tr>
<tr><td>Join Date:</td><td><input type="text" name="txtdate" required id="datepicker" class="span2 form-control" value="<?php echo $_date; ?>"/> </td></tr>
<tr><td>Designation:</td><td>

                        <select class="form-control" name="seldes" required>
                        <option value="0">--Select Designation--</option>
                        <option value="office-head" <?=$_designation == 'office-head' ? ' selected="selected"' : '';?>>Office Head</option>
                        <option value="librarian" <?=$_designation == 'librarian' ? ' selected="selected"' : '';?>>Librarian</option>
                       
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
  <?php require 'bottom.php'; ?>