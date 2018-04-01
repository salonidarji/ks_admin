 <?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php 
       // require '../shared/login_db.php';
        $obj=new login_db();
        $res=$obj->getLogin($_SESSION["eid"]);
        $row=$res->fetch_assoc();

        ?>
        <h3 class='page-header'>User Profile </h3>
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6">
 <!-- Profile Image -->
 <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo $row['login_profile']; ?>" height="30%" width="30%" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $row['login_uname']; ?></h3>
             

              <p class="text-muted text-center"><?php if($_SESSION["login_type"]==1){ echo 'Admin'; } else { echo 'Faculty'; } ?>
              <a href="login_update.php?id=<?php echo  $row["pk_login_email_id"]; ?>"><span class="glyphicon glyphicon-pencil btn btn-sm"></span></a>
</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Email Id :</b> <a class="pull-right"><?php echo $row['pk_login_email_id']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Rights Reserved :</b> <a class="pull-right"><?php if($_SESSION["login_type"]==1){ echo '90%'; } else { echo '70%'; } ?></a>
                </li>
                <li class="list-group-item">
                  <b>Password :</b> <a class="pull-right"><?php echo $row["login_passwd"]; ?></a>
                </li>
              </ul>

              <a href="change_passwd.php" class="btn btn-primary btn-block"><b>Change Password</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
</div>
<div class="col-md-3">
                
                </div>
</div>
</section>
</div>
          <?php require 'bottom.php'; ?>