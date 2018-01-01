<?php require 'top.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
 <form action="student_delete.php" name="student_form" method="post">
  
<div class="dataTables_wrapper">
<table class="table table-hover table-bordered table-striped" id="tableData" >
<h3 class='title'>Student</h3>
<hr>
      <?php 
require '..\shared\student_db.php';
$obj=new student_db();
$result=$obj->getAllStudent();

?>
   <thead bgcolor="silver">
  <th>Select</th>
   <th>Roll Number</th>
   <th>Email-Id</th>
   <th>Name</th> 
   <th>Mobile Number</th> 
   <th>Gender</th> 
   <th>Year</th> 
   
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      $rno=$row["pk_stu_rno"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$rno.'"> </td>';
      echo '<td>'.$row['pk_stu_rno']. '</td>';
      echo '<td>'.$row['fk_email_id']. '</td>';
      echo '<td>'.$row['stu_name']. '</td>';
      echo '<td>'.$row['stu_mobile_no']. '</td>';
      echo '<td>'.$row['stu_gender']. '</td>';
      echo '<td>'.$row['stu_year']. '</td>';
     
      echo '<td> <a href="student_update.php?rno='.  $row["pk_stu_rno"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
      
      </td>';
      echo '</tr>';
      
    }

    ?>

    
      </tbody> 
      </table>
      </div>
    <div>
      <div align="left">
<input type="submit" class="btn btn-primary" value="DELETE ALL">
</div>  
    
<div align="right" >
<a href="student_insert.php">
      <button type="button" right class="btn btn-primary">New</button>
    </a> 
</div>
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
<?php require 'bottom.php'; ?>