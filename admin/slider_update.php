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
require '..\shared\slider_db.php';
/*$_obj=new slider_db();
$result=$_obj->getSlider($que_id);
*/
$cnn= slider_db::connect();
$sql="select * from slider_tbl where pk_slider_id=".$_id;

$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{

    $_img=$row["slider_img"];
    $_cnt=$row["slider_count"];
    $_time=$row["slider_time"];

}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="slider_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Id :</td><td><input type="text" name="txtid" class="form-control" value="<?php echo $_id; ?>"/> </td></tr>
<tr><td>Image :</td><td><input type="file" name="txtimg" class="form-control" value="<?php echo $_img; ?>"/> </td></tr>
<tr><td>Count   :</td><td><input type="number" name="txtcnt" class="form-control" value="<?php echo $_cnt; ?>"/> </td></tr>
<tr><td>Time (in Seconds) :</td><td><input type="number" name="txttime" class="form-control" value="<?php echo $_time; ?>"/> </td></tr>
				
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