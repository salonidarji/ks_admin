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
require '..\shared\gallary_db.php';
/*$_obj=new gallary_db();
$result=$_obj->getgallary($_id);
*/
$cnn= gallary_db::connect();
$sql="select * from gallary_tbl where pk_gallary_id=".$_id;

$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{

$_title=$row["gallary_title"];
$_type=$row["gallary_type"];
$_url=$row["gallary_url"];
$_album_id=$row["fk_album_id"];
$_SESSION["img"]=$_url;
}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="gallary_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Id :</td><td><input type="number" name="txtid"  required class="form-control" value="<?php echo $_id; ?>"/> </td></tr>
<tr><td>Type :</td><td><input type="number" name="txttype"  required class="form-control" value="<?php echo $_type; ?>"/> </td></tr>
<tr><td>Album id :</td><td><input type="number" name="txtaid"  required class="form-control" value="<?php echo $_album_id; ?>" /> </td></tr>
<tr><td>title :</td><td><input type="text" name="txttitle"  required class="form-control" value="<?php echo $_title; ?>"/> </td></tr>
<tr><td>Url:</td><td><input type="file" name="txturl" required class="form-control" value="<?php echo $_url; ?>"/> </td></tr>


					
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