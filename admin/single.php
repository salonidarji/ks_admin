<?php require 'top.php'; ?>
<?php if(!isset($_SESSION["eid"])){
  
}
else{

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       
        <br><br><br><br><br>
      <?php
        $_email=$_GET["email"];
      //  require '../shared/login_db.php';
        $obj_img=new login_db();
        $res_img=$obj_img->getLogin($_email);
       
         $row_img=$res_img->fetch_assoc();

        require '../shared/student_db.php';
        $obj=new student_db();
        $res=$obj->getStudentEmail($_email);
       
         $row=$res->fetch_assoc();
         if($row["stu_year"]==1)
         {
             $_year="First";
         }
         else if($row["stu_year"]==2)
         {
             $_year="Second";
         }
         else if($row["stu_year"]==3)
         {
             $_year="Third";
         }
         else if($row["stu_year"]==4)
         {
             $_year="Fourth";
         }
         else if($row["stu_year"]==5)
         {
             $_year="Fifth";
         }
         else
         {
            $_year="NA";
        }
      echo '
<div class="row">
<div class="col-md-3">
</div>
        <div class="col-md-5">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="'.$row_img["login_profile"].'" alt="User profile picture">

              <h3 class="profile-username text-center">'.$row["stu_name"].'</h3>

              <p class="text-muted text-center">Student of '.$row["stu_semister"].'</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Roll Number :</b> <a class="pull-right">'.$row["pk_stu_rno"].'</a>
                </li>
                <li class="list-group-item">
                  <b>From :</b> <a class="pull-right">'.$_year.' year</a>
                </li>
                <li class="list-group-item">
                  <b>Contact Number:</b> <a class="pull-right">'.$row["stu_mobile_no"].'</a>
                </li>
              </ul>

              <a href="approve_one.php?email='.$_email.'" class="btn btn-primary btn-block"><b>Approve</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
         
          
           ';
          ?>
      
      
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
      <?php } require 'bottom.php'; ?>