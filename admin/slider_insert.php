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
   
      
<table class="table">
<form method="post" action="slider_insert_code.php" enctype="multipart/form-Data">
<div class="form-group">
<tr><td>Image :</td><td><input type="file" name="txtimg" required class="form-control" /> </td></tr>
<tr><td> Address (Where to Insert) :</td><td><select name="seladdress" required  class="form-control"/>
<option value="home">--select address--</option>
<option value="home">Home</option>
<option value="aboutus">About Us</option>
<option value="msc_placement">MSC Placement</option>
<option value="mba_placement">MBA Placement</option>

 </select> </td></tr>


<tr><td colspan="2"><input type="submit" name="btninsert" value="INSERT" class="form-control btn btn-info "/></td></tr>
</div>
</form>
</table></div>
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