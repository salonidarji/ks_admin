<?php require 'top.php'; ?>
<?php if(!isset($_SESSION["eid"])){
  
}
else{

?>
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
<form method="post" action="notice_insert_code.php" enctype="multipart/form-Data">
<div class="form-group">
<tr><td>Title :</td><td><input type="text" name="txttitle"  required class="form-control" /> </td></tr>
<tr><td>Description :</td><td><textarea  name="txtdesc" required  class="form-control" rows="5" cols="30"/> </textarea> </td></tr>
<tr><td>Upload File :</td><td><input type="file" name="txtlink" class="form-control"/> </td></tr>
<tr><td>Publiced On Date:</td><td><input type="text" name="txtdate" id="datepicker" class="span2 form-control"/> </td></tr>
<tr><td>Days :</td><td><input type="number" name="txtcnt" class="form-control"/> </td></tr>
<tr><td>Year:</td><td>
            <select name="selyear" class="form-control" >
            <option value="0"> --Select Year-- </option>
            <option value="1"> First </option>
            <option value="2"> Second </option>
            <option value="3"> Third </option>
            <option value="4"> Fourth </option>
            <option value="5"> Fifth </option>

            </select>
            <tr><td>Address:</td><td>
            <select name="seladdress" class="form-control" >
            <option value="0"> --Select Address-- </option>
            <option value="Marquee"> Marquee </option>
            <option value="Announcements"> Announcement </option>
            <option value="Events"> Events </option>
            <option value="News"> News </option>
           

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
      <?php } ?>
      <?php } require 'bottom.php'; ?>