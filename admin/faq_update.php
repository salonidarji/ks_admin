<?php require 'top.php'; ?>
<?php if(!isset($_SESSION["eid"])){
  
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
require '..\shared\faq_db.php';
/*$_obj=new material_db();
$result=$_obj->getMaterial($_id);
*/
$cnn= faq_db::connect();
$sql="select * from faq_tbl where faq_id=".$_id;

$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{
    $_id=$row["faq_id"];
$_ques=$row["faq_ques"];
$_ans=$row["faq_ans"];

}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="faq_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">

<tr><td>Id :</td><td><input type="text" READONLY name="txtid" class="form-control" value="<?php echo $_id; ?>"/> </td></tr>

<tr><td>Question :</td><td><input type="text" name="txtques" class="form-control" value="<?php echo $_ques; ?>"/> </td></tr>

<tr><td>Answer :</td><td><input type="text" name="txtans" class="form-control" value="<?php echo $_ans; ?>"/> </td></tr>




					
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

<?php } require 'bottom.php'; ?>