<?php require 'top.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
<?php 
$_id=$_GET["id"];
require '..\shared\material_db.php';
/*$_obj=new material_db();
$result=$_obj->getMaterial($_id);
*/
$cnn= material_db::connect();
$sql="select * from material_tbl where pk_material_id=".$_id;

$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{

$_title=$row["material_title"];
$_desc=$row["material_desc"];
$_url=$row["material_url"];
$_email=$row["fk_email_id"];
$_year=$row["fk_student_year"];



}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="material_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Id :</td><td><input type="number" name="txtid" class="form-control" value="<?php echo $_id; ?>"/> </td></tr>
<tr><td>Title :</td><td><input type="text" name="txttitle" class="form-control" value="<?php echo $_title; ?>"/> </td></tr>
<tr><td>Description :</td><td><textarea name="txtdesc" class="form-control" value="<?php echo $_desc; ?>"/></textarea> </td></tr>
<tr><td>Image / PDF :</td><td><input type="file" name="txturl" class="form-control" value="<?php echo $_url; ?>"/> </td></tr>
<tr><td>Faculty Email Id:</td><td><input type="email" name="txtemail" class="form-control" value="<?php echo $_email; ?>"/> </td></tr>

<tr><td>Student Year:</td><td>
					<select name="selyear" class="form-control">
                    <option value="0">--Select Year--</option>
                    <option value="1" <?=$_year == '1' ? ' selected="selected"' : '';?>>First</option>
                    <option value="2" <?=$_year == '2' ? ' selected="selected"' : '';?>>Second</option>
                    <option value="3" <?=$_year == '3' ? ' selected="selected"' : '';?>>Third</option>
                    <option value="4" <?=$_year == '4' ? ' selected="selected"' : '';?>>Fourth</option>
                    <option value="5" <?=$_year == '5' ? ' selected="selected"' : '';?>>Fifth</option>
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

  <?php require 'bottom.php'; ?>