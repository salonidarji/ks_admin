<?php require 'top.php'; ?>
<?php if(!isset($_SESSION["eid"])){
  
}
else{

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="student_insert_code.php">
<div class="form-group">
<tr><td>Roll Number :</td><td><input type="number" name="txtrno"  required class="form-control" /> </td></tr>
<tr><td>Enrollment Number :</td><td><input type="number" name="txtenrol"  required class="form-control" /> </td></tr>
<tr><td>Email Id :</td><td><input type="email" name="txtemail" required  class="form-control"/> </td></tr>
<tr><td>Name:</td><td><input type="text" name="txtname"  required class="form-control"/> </td></tr>
<tr><td>Mobile Number:</td><td><input type="number" name="txtmo_no"  required class="form-control"/> </td></tr>
<tr><td>Gender:</td><td>
                    <select class="form-control" name="selgen" required>
                    <option value="0">--Select Gender--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    
                    </select>

</td></tr>
<tr><td>Year :</td><td>
                    <select class="form-control" name="selyear" required>
                    <option value="0">--Select Year--</option>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                    <option value="4">Fourth</option>
                    <option value="5">Fifth</option>
                    </select>
            </td></tr>
            <tr><td>Semister :</td><td>
                    <select class="form-control" name="selsem" required>
                    <option value="0">--Select Semister--</option>
                    <option value="1">one</option>
                    <option value="2">two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                    <option value="6">Six</option>
                    <option value="7">Seven</option>
                    <option value="8">Eight</option>
                    <option value="9">Four</option>
                    <option value="10">Ten</option>
                    </select>
            </td></tr>
            <tr><td>Course:</td><td>
                    <select class="form-control" name="selcourse" required>
                    <option value="0">--Select Course--</option>
                    <option value="msc">MSC</option>
                    <option value="mba">MBA</option>
                    
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
<?php } require 'bottom.php'; ?>