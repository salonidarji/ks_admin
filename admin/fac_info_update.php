   <!-- Bootstrap 3.3.6 -->
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
  <?php
  
  session_start();
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  
  $_email=$_SESSION["eid"];
  
  $_teach_exp=$_POST["txtteach_exp"];
  $_phd=$_POST["txtphd"];
  $_paper=$_POST["txtpaper"];
  $_specialization=$_POST["txtspec"];
  $_activities=$_POST["txtactivities"];
  
 
  require '../shared/faculty_db.php';
  $obj=new faculty_db();
  $res=$obj->updateFacultyInfo($_email,$_teach_exp,$_phd,$_paper,$_specialization,$_activities);
  echo "res=".$res;
   if($res)
   {
     
       header('location:fac_info.php');
   
   }
   else
   {
       echo '<br><br><br><br><br><br>
       <div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
      <h2>  Record Not Inserted,<br> Please Try Again !!!</h2>
      <br><button class="btn btn-default btn-lg"><a href="fac_info.php">Back</a></button>
       </div>
       ';
  
  }
  
  }
  ?>
  