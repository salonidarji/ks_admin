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
require '..\shared\faculty_db.php';
/*$_obj=new faculty_db();
$result=$_obj->getFaculty($_id);
*/
$cnn= faculty_db::connect();
$sql="select * from faculty_tbl where pk_faculty_id=".$_id;
$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{
    
  $_email=$row["fk_email_id"];
  $_name=$row["faculty_name"];
    $_degree=$row["faculty_degree"];
    $_date=$row["faculty_join_date"];
    $_resume=$row["faculty_resume"];
}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="faculty_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Id :</td><td><input type="number" name="txtid" class="form-control" value="<?php echo $_id; ?>"/> </td></tr>
<tr><td>Email Id :</td><td><input type="email" name="txtemail" class="form-control" value="<?php echo $_email; ?>"/> </td></tr>
<tr><td>Name :</td><td><input type="text" name="txtname" class="form-control" value="<?php echo $_name; ?>"/> </td></tr>
<tr><td>Profile :</td><td><input type="file" name="txtimg" class="form-control"/> </td></tr>
<tr><td>Degree :</td><td><input type="text" name="txtdegree" class="form-control" value="<?php echo $_degree; ?>"/> </td></tr>

<tr><td>Join Date :</td><td><input type="text" name="txtdate"  id="datepicker" class="span2 form-control" value="<?php echo $_date; ?>"/> </td></tr>
<tr><td>Resume :</td><td><input type="file" name="txtresume" class="form-control"/> </td></tr>
<tr><td>Course :</td><td><select name="selcourse" class="form-control">
        <option value="null">--Select Course--</option>
        <option value="msc">Msc(CA & IT)</option>
        <option value="mba">MBA</option>
</select></td></tr>
					
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