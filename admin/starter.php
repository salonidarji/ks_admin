<?php require 'top.php'; ?>
<?php if(!isset($_SESSION["eid"])){
  
}
else{

?>
     
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


      

<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
     
    </section>
      <div class="table-responsive">
<table class="table table-striped table-bordered" align="center">

      
      
      </table>
      </div>
    </section>
 <!-- Main content -->
 <section class="content">
<?php if($_SESSION["login_type"]==1){ 
  
  
  
  ?>
<!-- Your Page Content Here -->

                <div class="row">
                <div class="col-md-6">
              <!-- USERS LIST -->
              <?php
              require '../shared/material_db.php';
              $obj_approve=new material_db();
              $res_approve=$obj_approve->getPendingMaterial();

              echo '
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Material Request</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">'.$res_approve->num_rows.' New Material</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <form name="material_approve" action="approve_material.php" method="post" >
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  
                  ';
                  
                  while($row=$res_approve->fetch_assoc()){
                    echo '
                    <li> 
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="checkbox" name="chkdel[]" value="'.$row["pk_material_id"]. '">
                    <iframe src="'.$row['material_url']. '" alt="material_image" height="150px" width="100px"></iframe>
                    <a class="users-list-name" href="'.$row['material_url']. '" >'.$row["material_title"].'</a>
                    <span class="users-list-date">'.$row["material_approve"].'</span>
                    </li> ';
                  }
                  echo '
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="material.php" class="uppercase">View All Material</a>
                </div>
                <!-- /.box-footer -->
              </div>
              '; ?>
              <!--/.box -->
              <div align="left">
<input type="submit" class="btn btn-primary" value="Approve Materials">
</div> 
            </div>
        
        <!-- ./col -->
     
      <!-- Main row -->

     
                </form>        
<!--faculty -->

<div class="col-md-6">
              <!-- USERS LIST -->
              <?php
             // require '../shared/login_db.php';
              $obj_approve=new login_db();
              $res_approve=$obj_approve->getFaculty();

              echo '
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Faculty Request</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">'.$res_approve->num_rows.' New Staff / Faculty</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <form name="starter_staff" action="approve.php" method="post" >
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  
                  ';
                  
                  while($row=$res_approve->fetch_assoc()){
                    echo '
                    
                    <li> 
                  
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="checkbox" name="chkdel[]" value="'.$row["pk_login_email_id"]. '">
                      <img src="'.$row["login_profile"].'" alt="User Image">
                      <a class="users-list-name"  >'.$row["login_uname"].'</a>
                      <span class="users-list-date">'.$row["login_approve"].'</span>
                     
                    </li> ';
                  }
                  echo '
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="staff.php" class="uppercase">View All Staff</a>
                </div>
                <!-- /.box-footer -->
              </div>
              '; ?>


      <div align="left">
<input type="submit" class="btn btn-primary" value="Approve Staff">
</div> 
               
              <!--/.box -->
            </div>
            </form>
        <!-- ./col -->
        </div>
        <?php 
     echo '<br><br>
     <a href="changeYearRno.php" > <button class="btn btn-success">Change roll number yearly</button></a>
       ';
     ?>
      <!-- /.row -->
      <!-- Main row -->
                <?php }
                else if($_SESSION["login_type"]==2){

                 
                  ?>
<h3 align="center">Attendance Zone</h3>


                  <div class="row">

                  <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3>1<sup>st</sup> Year</h3>
          
                        <p>Students</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person"></i>
                      </div>
                      <a href="attendance.php?year=1" class="small-box-footer">Click Here For attendance <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>


                  <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                      <div class="inner">
                        <h3>2<sup>nd</sup> Year</h3>
          
                        <p>Students</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person"></i>
                      </div>
                      <a href="attendance.php?year=2" class="small-box-footer">Click Here For attendance <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                      <div class="inner">
                        <h3>3<sup>rd</sup> Year</h3>
          
                        <p>Students</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person"></i>
                      </div>
                      <a href="attendance.php?year=3" class="small-box-footer">Click Here For attendance <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  

                  <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                      <div class="inner">
                        <h3>4<sup>th</sup> Year</h3>
          
                        <p>Students</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person"></i>
                      </div>
                      <a href="attendance.php?year=4" class="small-box-footer">Click Here For attendance <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>


                  <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3>5<sup>th</sup> Year</h3>
          
                        <p>Students</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person"></i>
                      </div>
                      <a href="attendance.php?year=5" class="small-box-footer">Click Here For attendance <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                      <div class="inner">
                        <h3>Show</h3>
          
                        <p>Attendance</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person"></i>
                      </div>
                      <a href="attendance_show.php" class="small-box-footer">Click Here To View attendance <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
     <h3 align="center">Upload Material</h3>
     <div class="col-lg-4 col-xs-6">
                </div>
                <div class="col-lg-4 col-xs-6">
                  <div class="info-box"><a href="material_link_update.php">
            <span class="info-box-icon bg-red"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Uploads</span>
              <span class="info-box-number">(Notes)</span>
            </div>
                </a>
            <!-- /.info-box-content -->
          </div>
          
                </div>
                  <!--row-->
                  </div>

                 

                
        <!-- ./col -->
     
      <!-- Main row -->

                  
                <?php }
                else{
                  echo '<h1> You are not aloowed the access</h1>';
                }
                ?>
           
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
              <?php } ?>
   <?php require 'bottom.php'; ?>