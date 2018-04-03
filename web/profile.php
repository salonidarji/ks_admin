<?php require 'top.php'; ?>
<h3 class="tittle-w3l">User Profile
       
<span class="heading-style">
    <i></i>
    <i></i>
    <i></i>
</span>
</h3>
<div class="container">
<div class="product-sec1" align="center">
<?php
 $obj=new login_db();
 $res=$obj->getLogin($_SESSION["eid"]);
 $row=$res->fetch_assoc();
?>
<form name="profile" action="profile_update.php" method="post" enctype="form-data">
    <div class="form-group">
<div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo $row['login_profile']; ?>" height="30%" width="30%" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $row['login_uname']; ?></h3>
             

              <p class="text-muted text-center"></p>
              <br>
              <div class="jumbotron row">
            
              <div class="col-md-6">  Registered Email Id :</div>
              <div class="col-md-6"><input type="email" name="txtemail" readonly value="<?php echo $row['pk_login_email_id']; ?>" class="form-control"></div>    
              
            </div>

        </div>
                <table class="table">
                <td><a href="index.php" class="btn btn-danger btn-block"><b><span class="glyphicon glyphicon-home btn btn-md"></span>Back Home</b></a></td>
                <td><a href="change_passwd.php" class="btn btn-success btn-block"><b><span class="glyphicon glyphicon-pencil btn btn-md"></span>Password</b></a></td>
                

            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

</div>
</div>
</form>
<?php require 'bottom.php'; ?>