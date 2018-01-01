<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="video_insert_code.php">
<div class="form-group">
<tr><td>Title:</td><td><input type="text" name="txttitle" class="form-control" /> </td></tr>
<tr><td>Description :</td><td><input type="text" name="txtdesc" class="form-control"/> </td></tr>
<tr><td>Path :</td><td><input type="file" name="txturl" class="form-control"/> </td></tr>


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