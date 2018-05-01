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
require '..\shared\video_db.php';
/*$_obj=new video_db();
$result=$_obj->getVideo($que_id);
*/
$cnn= video_db::connect();
$sql="select * from video_tbl where pk_video_id=".$_id;

$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{

    $_title=$row["video_title"];
    $_desc=$row["video_desc"];
    $_url=$row["url"];

}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="video_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Id :</td><td><input type="text" name="txtid" readonly class="form-control" value="<?php echo $_id; ?>"/> </td></tr>
<tr><td>Title :</td><td><input type="text" name="txttitle" class="form-control" value="<?php echo $_title; ?>"/> </td></tr>
<tr><td>Description   :</td><td><input type="text" name="txtdesc" class="form-control" value="<?php echo $_desc; ?>"/> </td></tr>
<tr><td>Path :</td><td><input required type="text" name="txturl" class="form-control" value="<?php echo $_url; ?>"/> </td></tr>
				
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