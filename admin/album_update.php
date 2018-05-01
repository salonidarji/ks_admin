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
require '..\shared\album_db.php';
/*$_obj=new album_db();
$result=$_obj->getAlbum($_id);
*/
$cnn= album_db::connect();
$sql="select * from album_tbl where pk_album_id=".$_id;

$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{

$_url=$row["url"];
$_SESSION["img"]=$_url;
}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="album_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Id :</td><td><input type="number" name="txtid" class="form-control" value="<?php echo $_id; ?>"/> </td></tr>
<tr><td>url :</td><td><input type="file" name="txturl" required class="form-control" value="<?php echo $_url; ?>" /> </td></tr>

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
<?php } } ?>
 <?php require 'bottom.php'; ?>