<?php require 'top.php'; ?>
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
      <form action="#" name="course_form" method="post">
   



<div class="dataTables_wrapper">
<h4><table class="table table-hover table-striped" id="tableData" >
<h3 class='title'>Course</h3>
<hr>
      <?php 
require '..\shared\course_db.php';
$obj=new course_db();
$result=$obj->getAllCourse();

?>
   <thead bgcolor="silver">
  <th>Name</th>
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      
      echo '<tr>';
      echo '<td>'.$row['pk_course_name']. '</td>';
     
      echo '</tr>';
      
    }

    ?>

    
      </tbody> 
      </table>
  </h4>
      </div>
               
  </form>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php } ?>
<?php require 'bottom.php'; ?>