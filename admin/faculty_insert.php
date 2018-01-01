<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="faculty_insert_code.php">
<div class="form-group">
<tr><td>Email Id:</td><td><input type="email" name="txtemail" class="form-control" /> </td></tr>
<tr><td>Name:</td><td><input type="text" name="txtname" class="form-control" /> </td></tr>
<tr><td>Degree :</td><td><input type="text" name="txtdegree" class="form-control"/> </td></tr>
<tr><td>Join Date :</td><td><input type="text" name="txtdate" class="form-control"/> </td></tr>
<tr><td>Resume :</td><td><input type="file" name="txtresume" class="form-control"/> </td></tr>


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