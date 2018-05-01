
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- dataTbles --> 
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css">
  <!-- AdmLTE for content title-->
  <link rel="stylesheet" type="text/css" href="dist/css/AdminLTE.css">
   <!-- date picker  -->
   <link rel="stylesheet" href="../bootstrap/css/bootstrap-datepicker.css">
  
  
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini " >
<?php
session_start();
if(!isset($_SESSION["eid"]))
{
  echo '<h1><div align="center" class="jumbotron alert-danger"> please do login first
  <br><br><a href="../web/index.php"><button class="btn btn-primary btn-lg">Back</button></a>
  </div></h1>';
}
else{
  $_id=$_SESSION["eid"];
require '../shared/login_db.php';
$obj_login=new login_db();
$res_login=$obj_login->getLogin($_id);
$row=$res_login -> fetch_assoc();


?>

<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="starter.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>KS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>KS</b>Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

                
              
                   
             
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo $row["login_profile"]; ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <?php 
              if($_SESSION["login_type"]==1){
                echo'<span class="hidden-xs">Admin</span>';
              }
              else{
                echo'<span class="hidden-xs">Faculty</span>';
              }
              ?>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo $row["login_profile"]; ?>" class="img-circle" alt="User Image">

                <p>
                  < <?php echo $row["login_uname"]?> >
                  
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $row["login_profile"]; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $row["login_uname"]; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
        </form>-->
      <!-- /.search form -->

      <?php
      
        $_hide="";
        $_type=$_SESSION["login_type"];
        if($_type==2)
        {
          $_hide="hidden";
        }
        else{
          $_hide="";
        }
      ?>

     <!-- Sidebar Menu -->
     
      <ul class="sidebar-menu">
       <li class="treeview">
          
       <li  ><a href="starter.php"><i class="fa fa-home"></i> <span > Dashboard </span> </a></li>
       <li <?php echo $_hide; ?> ><a href="login.php"><i class="fa fa-table"></i> <span > Login </span> </a></li>
          <li <?php echo $_hide; ?> ><a href="faculty.php"><i class="fa fa-table"></i> <span > Faculty </span></a></li>
          <li <?php echo $_hide; ?> ><a href="staff.php"><i class="fa fa-table"></i> <span > Staff </span></a></li>
          <li  ><a href="student.php"><i class="fa fa-table"></i> <span > Student</span> </a></li>
          <li <?php echo $_hide; ?> ><a href="course.php"><i class="fa fa-table"></i> <span >Course </span></a></li>
          <li  ><a href="material.php"><i class="fa fa-table"></i> <span > Material</span> </a></li>
          <li <?php echo $_hide; ?> ><a href="notice.php"><i class="fa fa-table"></i> <span > Notice</span></a></li>
          <li  ><a href="qa.php"><i class="fa fa-table"></i> <span > Question-Answer</span> </a></li>
          <li  ><a href="faq.php"><i class="fa fa-table"></i> <span > FAQs</span> </a></li>
          <li  ><a href="result.php"><i class="fa fa-table"></i> <span > Result</span> </a></li>
          <li  ><a href="test.php"><i class="fa fa-table"></i> <span > Test</span> </a></li>
          <li <?php echo $_hide; ?> ><a href="slider.php"><i class="fa fa-table"></i> <span > Slider </span> </a></li>  
          <li <?php echo $_hide; ?> ><a href="album.php"><i class="fa fa-table"></i> <span > Album </span></a></li>
          <li <?php echo $_hide; ?> ><a href="gallary.php"><i class="fa fa-table"></i> <span > Gallary </span></a></li>
          <li <?php echo $_hide; ?> ><a href="video.php"><i class="fa fa-table"></i> <span > Video </span></a></li>
         
        </li>
       
       </ul> <!-- /.sidebar-menu -->
     
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php } ?>

