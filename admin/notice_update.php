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
   
<?php 
$_id=$_GET["id"];
require '..\shared\notice_db.php';
$_obj=new notice_db();
$result=$_obj->getNoticeById($_id);


if($result->num_rows==1)
{
  $row=$result->fetch_assoc();
$_title=$row["notice_title"];
$_desc=$row["notice_desc"];
$_link=$row["notice_link"];
$_date=$row["notice_start_date"];
$_cnt=$row["notice_end_count"];
$_email=$row["fk_email_id"];
$_year=$row["notice_year"];
$_SESSION["img"]=$_link;
$_address=$row["notice_address"];

}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="notice_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Id :</td><td><input type="text" name="txtid" class="form-control" value="<?php echo $_id; ?>"/> </td></tr>
<tr><td>Title :</td><td><input type="text" name="txttitle" class="form-control" value="<?php echo $_title; ?>"/> </td></tr>
<tr><td>Description :</td><td><input type="text" name="txtdesc" class="form-control" value="<?php echo $_desc; ?>"/> </td></tr>

<tr><td>Link :</td><td><input type="file" name="txtlink" class="form-control" value="<?php echo $_link; ?>"/> </td></tr>
<tr><td>Published On:</td><td><input type="text" name="txtdate" id="datepicker" class="span2 form-control" value="<?php echo $_date; ?>"/> </td></tr>
<tr><td>Days:</td><td><input type="number" name="txtcnt" class="form-control" value="<?php echo $_cnt; ?>"/> </td></tr>
<tr><td>Email Id :</td><td><input type="email" name="txtemail" class="form-control" value="<?php echo $_email; ?>"/> </td></tr>
<tr><td>Student Year:</td><td>
					<select name="selyear" class="form-control">
                    <option value="0">--Select Year--</option>
                    <option value="1" <?=$_year == '1' ? ' selected="selected"' : '';?>>First</option>
                    <option value="2" <?=$_year == '2' ? ' selected="selected"' : '';?>>Second</option>
                    <option value="3" <?=$_year == '3' ? ' selected="selected"' : '';?>>Third</option>
                    <option value="4" <?=$_year == '4' ? ' selected="selected"' : '';?>>Fourth</option>
                    <option value="5" <?=$_year == '5' ? ' selected="selected"' : '';?>>Fifth</option>
					</select>
          
            <tr><td>Address:</td><td>
            <select name="seladdress" class="form-control" >
            <option value="0"> --Select Address-- </option>
            <option value="Marquee"  <?=$_address == 'Marquee' ? ' selected="selected"' : '';?>> Marquee </option>
            <option value="Announcements"  <?=$_address == 'Announcements' ? ' selected="selected"' : '';?>> Announcement </option>
            <option value="Events"  <?=$_address == 'Events' ? ' selected="selected"' : '';?>> Events </option>
            <option value="News"  <?=$_address == 'News' ? ' selected="selected"' : '';?>> News </option>
</select>
				</td></tr>

					
<tr><td  colspan="2"><input type="submit" name="btnupdate" value="UPDATE"class="form-control btn  btn-info"/></td></tr>
</div>
</form>
</table>
</div>

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