<?php require 'top.php'; ?>
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
<form method="post" action="login_insert_code.php" enctype="multipart/form-data">
<div class="form-group">
<tr><td>Email :</td><td><input type="email" name="txtemail" required  class="form-control" /> </td></tr>
<tr><td>Enrollment No. :</td><td><input type="number" name="txtenrol"  class="form-control" /> </td></tr>
<tr><td>Profile :</td><td><input type="file" name="txtprofile"  required class="form-control"/> </td></tr>
<tr><td>Name:</td><td><input type="text" name="txtname" required class="form-control"/> </td></tr>
<tr><td>Password:</td><td><input type="password" name="txtpass" required class="form-control"/> </td></tr>
<tr><td>Type:</td><td>

                        <select class="form-control" name="seltype" required>
                        <option value="0">Student</option>
                        <option value="1">Admin</option>
                        <option value="2">Staff / Faculty</option>
                        
                       
                        </select>
                    </td></tr>
                    <tr><td>Approve Status:</td><td>

<select class="form-control" name="selapprove">
<option value="0">--Select--</option>
<option value="pending">Pending</option>
<option value="approved">Approved</option>


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
      <?php } ?>
  <?php require 'bottom.php'; ?>