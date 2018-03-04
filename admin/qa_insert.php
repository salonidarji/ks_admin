<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="qa_insert_code.php" enctype="multipart/form-Data">
<div class="form-group">
<tr><td>Title :</td><td><input type="text" name="txttitle" required  class="form-control" /> </td></tr>
<tr><td>Description :</td><td><textarea name="txtdesc" required class="form-control" rows="5" cols="5"/> </textarea> </td></tr>
<tr><td>Image :</td><td><input type="file" name="txtimg" class="form-control"/> </td></tr>
<tr><td>option A:</td><td><input type="text" name="txtop1"  required class="form-control"/> </td></tr>
<tr><td>option B :</td><td><input type="text" name="txtop2"  required class="form-control"/> </td></tr>
<tr><td>option C :</td><td><input type="text" name="txtop3" required  class="form-control"/> </td></tr>
<tr><td>option D :</td><td><input type="text" name="txtop4"  required class="form-control"/> </td></tr>
<tr><td>Answer :</td><td><input type="text" name="txtans" required  class="form-control"/> </td></tr>
<tr><td>To Which Year:</td><td>
            <select name="selyear" class="form-control" >
            <option value="0"> --Select Year-- </option>
            <option value="1"> First </option>
            <option value="2"> Second </option>
            <option value="3"> Third </option>
            <option value="4"> Fourth </option>
            <option value="5"> Fifth </option>

            </select>


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