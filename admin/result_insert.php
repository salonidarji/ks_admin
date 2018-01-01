<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="result_insert_code.php">
<div class="form-group">
<tr><td>Type :</td><td>
                <select name="seltype" class="form-control">
                <option value="0">--Select Type--</option>
                <option value="1">Final Exam</option>
                <option value="2">Mid Exam</option>
                </select>
             </td></tr>
<tr><td>Email Id :</td><td><input type="text" name="txtemail" class="form-control"/> </td></tr>
<tr><td>Subject 1 :</td><td><input type="text" name="txtsub1" class="form-control"/> </td></tr>
<tr><td>Subject 1 Marks:</td><td><input type="number" name="txtsub1_marks" class="form-control"/> </td></tr>
<tr><td>Subject 2 :</td><td><input type="text" name="txtsub2" class="form-control"/> </td></tr>
<tr><td>Subject 2 Marks:</td><td><input type="number" name="txtsub2_marks" class="form-control"/> </td></tr>
<tr><td>Subject 3 :</td><td><input type="text" name="txtsub3" class="form-control"/> </td></tr>
<tr><td>Subject 3 Marks:</td><td><input type="number" name="txtsub3_marks" class="form-control"/> </td></tr>
<tr><td>Subject 4 :</td><td><input type="text" name="txtsub4" class="form-control"/> </td></tr>
<tr><td>Subject 4 Marks:</td><td><input type="number" name="txtsub4_marks" class="form-control"/> </td></tr>
<tr><td>Subject 5 :</td><td><input type="text" name="txtsub5" class="form-control"/> </td></tr>
<tr><td>Subject 5 Marks:</td><td><input type="number" name="txtsub5_marks" class="form-control"/> </td></tr>
<tr><td>Subject 6 :</td><td><input type="text" name="txtsub6" class="form-control"/> </td></tr>
<tr><td>Subject 6 Marks:</td><td><input type="number" name="txtsub6_marks" class="form-control"/> </td></tr>
<tr><td>Subject 7 :</td><td><input type="text" name="txtsub7" class="form-control"/> </td></tr>
<tr><td>Subject 7 Marks:</td><td><input type="number" name="txtsub7_marks" class="form-control"/> </td></tr>
<tr><td>Subject 8 :</td><td><input type="text" name="txtsub8" class="form-control"/> </td></tr>
<tr><td>Subject 8 Marks:</td><td><input type="number" name="txtsub8_marks" class="form-control"/> </td></tr>
<tr><td>Subject 9 :</td><td><input type="text" name="txtsub9" class="form-control"/> </td></tr>
<tr><td>Subject 9 Marks:</td><td><input type="number" name="txtsub9_marks" class="form-control"/> </td></tr>


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