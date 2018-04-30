<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="material_insert_code.php" enctype="multipart/form-Data">
<div class="form-group">
<tr><td>Title :</td><td><input type="text" name="txttitle"  required class="form-control" /> </td></tr>
<tr><td>Description :</td><td><textarea rows="5" cols="5" required class="form-control" name="txtdesc"></textarea> </td></tr>
<tr><td> PDF:</td><td><input type="file" name="txturl" required class="form-control"/> </td></tr>

             <tr><td>Address:</td><td>
            <select name="seladdress" class="form-control" >
            <option value="0"> --Select Address-- </option>
            <option value="mba"> MBA </option>
            <option value="msc"> MSC </option>
            <option value="academic"> Academic </option>
            <option value="holidays"> Holidays </option>
            

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