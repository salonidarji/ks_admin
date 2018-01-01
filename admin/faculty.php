<?php require 'top.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="faculty_delete.php" name="faculty_form" method="post">
   



<div class="dataTables_wrapper">
<table class="table table-hover table-bordered table-striped" id="tableData" >
<h3 class='title'>Faculty </h3>
<hr>
      <?php 
require '..\shared\faculty_db.php';
$obj=new faculty_db();
$result=$obj->getAllFaculty();

?>
   <thead bgcolor="silver">
  <th>Select</th>
   <th>Email Id</th>
   <th>Name</th>
   <th>Degree</th>
   <th>Join Date</th> 
   <th>Resume</th> 
   
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_faculty_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$row['fk_email_id']. '</td>';
      echo '<td>'.$row['faculty_name']. '</td>';
      echo '<td>'.$row['faculty_degree']. '</td>';
      echo '<td>'.$row['faculty_join_date']. '</td>';
      echo '<td>'.$row['faculty_resume']. '</td>';
      
      echo '<td> <a href="faculty_update.php?id='.  $row["pk_faculty_id"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
      
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
<a href="faculty_insert.php">
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