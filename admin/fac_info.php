<?php require 'top.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <?php 
      require '../shared/faculty_db.php';
      $obj=new faculty_db();
      $_id=$_SESSION["eid"];
      $res=$obj->getFacultyEmail($_id);
     
      if($res){
      $row=$res->fetch_assoc();

      ?>
      <h3 class='page-header'>User Profile </h3>
      <div class="row">
          <div class="col-md-3">
              
          </div>
          <div class="col-md-6">
<!-- Profile Image -->
<a href="profile.php" class="btn btn-primary">Back</a>
<br><br>
<div class="box box-primary">
          <div class="box-body box-profile">
           

            <p class="text-muted text-center"><?php echo $row["faculty_name"]; ?>
<?php if($_SESSION["login_type"]==1){ ?><a href="login_update.php?id=<?php echo  $row["pk_login_email_id"]; ?>"><span class="glyphicon glyphicon-pencil btn btn-sm"></span></a> <?php } ?>
</p>
<form name="fac_update" method="post" action="fac_info_update.php">
<table class="table table-responsive">
<tr><td>Teaching Experience :</td><td><input type="text" name="txtteach_exp"  class="form-control" value="<?php echo $row["teaching_experience"]; ?>"/> </td></tr>
<tr><td>PHD Details :</td><td><input type="text" name="txtphd" class="form-control" value="<?php echo $row["phd_details"]; ?>"/> </td></tr>
<tr><td>Paper Presented Details :</td><td><input type="text" name="txtpaper" class="form-control" value="<?php echo $row["paper_presented"]; ?>"/> </td></tr>
<tr><td>Specialization Areas :</td><td><input type="text" name="txtspec"  class="form-control" value="<?php echo $row["specialization"]; ?>"/> </td></tr>
<tr><td>Extra Activities :</td><td><input type="text" name="txtactivities"  class="form-control" value="<?php echo $row["activities"]; ?>"/> </td></tr>
<tr><td colspan="2">
        <input type="submit" name="submit" value="Update Information" class="btn btn-primary btn-block">
</td></tr>
</table>
</form>
           
      </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
</div>
</div>
<div class="col-md-3">
              
              </div>
</div>
      <?php } ?>
</section>
        <?php require 'bottom.php'; ?>