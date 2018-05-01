<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="faq_insert_code.php" enctype="multipart/form-Data">
<div class="form-group">
<tr><td>Question:</td><td><input type="text" name="txtques"  required class="form-control" /> </td></tr>
<tr><td>Answer :</td><td><textarea rows="5" cols="5" required class="form-control" name="txtans"></textarea> </td></tr>
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