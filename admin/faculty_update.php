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
  $_desc=$row["faculty_description"];
  $_desig=$row["faculty_desig"];
 $_course=$row["faculty_course"];
 $_teach_exp=$row["teaching_experience"];
 $_phd=$row["phd_details"];
 $_paper=$row["paper_presented"];
 $_specialization=$row["specialization"];
 $_activities=$row["activities"];

}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="faculty_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Id :</td><td><input type="number" name="txtid" required class="form-control" value="<?php echo $_id; ?>"/> </td></tr>
<tr><td>Email Id :</td><td><input type="email" name="txtemail" required class="form-control" value="<?php echo $_email; ?>"/> </td></tr>
<tr><td>Name :</td><td><input type="text" name="txtname" required class="form-control" value="<?php echo $_name; ?>"/> </td></tr>
<tr><td>Profile :</td><td><input type="file" name="txtimg" required class="form-control"/> </td></tr>
<tr><td>Degree :</td><td><input type="text" name="txtdegree" required class="form-control" value="<?php echo $_degree; ?>"/> </td></tr>
<tr><td>Designation :</td><td><input type="text" name="txtdesig" required class="form-control" value="<?php echo $_desig; ?>"/> </td></tr>
<tr><td>Description :</td><td><textarea name="txtdesc" rows="10" required class="span2 form-control"><?php echo $_desc; ?></textarea></td></tr>
<tr><td>Course :</td><td><select name="selcourse" class="form-control" required>
        <option value="null">--Select Course--</option>
        <option value="msc" <?=$_course == 'msc' ? ' selected="selected"' : '';?>>Msc(CA & IT)</option>
        <option value="mba" <?=$_course == 'mba' ? ' selected="selected"' : '';?>>MBA</option>
</select></td></tr>

  
<tr><td>Teaching Experience :</td><td><input type="text" name="txtteach_exp"  class="form-control" value="<?php echo $_teach_exp; ?>"/> </td></tr>
<tr><td>PHD Details :</td><td><input type="text" name="txtphd" class="form-control" value="<?php echo $_phd; ?>"/> </td></tr>
<tr><td>Paper Presented Details :</td><td><input type="text" name="txtpaper" class="form-control" value="<?php echo $_paper; ?>"/> </td></tr>
<tr><td>Specialization Areas :</td><td><input type="text" name="txtspec"  class="form-control" value="<?php echo $_specialization; ?>"/> </td></tr>
<tr><td>Extra Activities :</td><td><input type="text" name="txtactivities"  class="form-control" value="<?php echo $_activities; ?>"/> </td></tr>

				
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