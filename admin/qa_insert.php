<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="qa_insert_code.php">
<div class="form-group">
<tr><td>Title :</td><td><input type="text" name="txttitle" class="form-control" /> </td></tr>
<tr><td>Description :</td><td><input type="text" name="txtdesc" class="form-control"/> </td></tr>
<tr><td>Image :</td><td><input type="file" name="txtimg" class="form-control"/> </td></tr>
<tr><td>option A:</td><td><input type="text" name="txtop1" class="form-control"/> </td></tr>
<tr><td>option B :</td><td><input type="text" name="txtop2" class="form-control"/> </td></tr>
<tr><td>option C :</td><td><input type="text" name="txtop3" class="form-control"/> </td></tr>
<tr><td>option D :</td><td><input type="text" name="txtop4" class="form-control"/> </td></tr>
<tr><td>Answer :</td><td><input type="text" name="txtans" class="form-control"/> </td></tr>
<tr><td>To which year :</td><td><input type="number" name="txtyear" class="form-control"/> </td></tr>


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