<?php require 'top.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="slider_insert_code.php" enctype="multipart/form-Data">
<div class="form-group">
<tr><td>Image :</td><td><input type="file" name="txtimg" class="form-control" /> </td></tr>
<tr><td>Count :</td><td><input type="number" required name="txtcnt" class="form-control"/> </td></tr>
<tr><td>Time (in Seconds) :</td><td><input type="number" name="txttime" required  class="form-control"/> </td></tr>


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
  <?php require 'bottom.php'; ?>