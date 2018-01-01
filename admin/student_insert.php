<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="student_insert_code.php">
<div class="form-group">
<tr><td>Roll Number :</td><td><input type="number" name="txtrno" class="form-control" /> </td></tr>
<tr><td>Email Id :</td><td><input type="email" name="txtemail" class="form-control"/> </td></tr>
<tr><td>Name:</td><td><input type="text" name="txtname" class="form-control"/> </td></tr>
<tr><td>Mobile Number:</td><td><input type="number" name="txtmo_no" class="form-control"/> </td></tr>
<tr><td>Gender:</td><td>
                    <select class="form-control" name="selgen">
                    <option value="0">--Select Gender--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    
                    </select>

</td></tr>
<tr><td>Year :</td><td>
                    <select class="form-control" name="selyear">
                    <option value="0">--Select Year--</option>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                    <option value="4">Fourth</option>
                    <option value="5">Fifth</option>
                    </select>
            </td></tr>
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