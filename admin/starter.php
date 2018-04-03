<?php require 'top.php'; ?>
<?php
      if($_SESSION["eid"]==""){
        echo '<div class=" btn-lg btn-danger" align="center">
        Please , Do login first
        </div>';
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

      
      </div>
      </table>
    </section>
 <!-- Main content -->
 <section class="content">
<?php if($_SESSION["login_type"]==1){ ?>
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
      <!-- /.row -->
      <!-- Main row -->
                <?php }
                else if($_SESSION["login_type"]==2){
                ?>
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