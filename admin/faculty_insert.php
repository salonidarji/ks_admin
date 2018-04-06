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
<form method="post" action="faculty_insert_code.php" enctype="multipart/form-Data">
<div class="form-group">
<tr><td>Email Id:</td><td><input type="email" name="txtemail" required class="form-control" /> </td></tr>
<tr><td>Name:</td><td><input type="text" name="txtname"  required class="form-control" /> </td></tr>
<tr><td>Profile :</td><td><input type="file" name="txtimg"  class="form-control"/> </td></tr>
<tr><td>Degree :</td><td><input type="text" name="txtdegree" required  class="form-control"/> </td></tr>
<tr><td>Designation :</td><td><input type="text" name="txtdesig"  class="form-control"/> </td></tr>
<tr><td>Description :</td><td><textarea name="txtdesc" rows="10"  class="span2 form-control"/></textarea> </td></tr>
<tr><td>Course :</td><td><select name="selcourse" class="form-control">
        <option value="null">--Select Course--</option>
        <option value="MSC(CA & IT)">Msc(CA & IT)</option>
        <option value="MBA">MBA</option>
</select></td></tr>

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