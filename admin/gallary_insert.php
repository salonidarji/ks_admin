<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="gallary_insert_code.php" enctype="multipart/form-Data">
<div class="form-group">
<tr><td>Type :</td><td><input type="number" name="txttype"  required class="form-control" /> </td></tr>
<tr><td>Album id :</td><td><input type="number" name="txtaid"  required class="form-control" /> </td></tr>
<tr><td>title :</td><td><input type="text" name="txttitle"  required class="form-control" /> </td></tr>
<tr><td>Url:</td><td><input type="file" name="txturl" required class="form-control"/> </td></tr>


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