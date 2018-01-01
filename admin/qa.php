
  <?php require 'top.php'; ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="qa_delete.php" name="qa_form" method="post">
 <div class="dataTables_wrapper">
<table class="table table-hover table-bordered table-striped" id="tableData" >
<h3 class='page-header'>Question-Answer </h3>
<hr>
      <?php 
require '..\shared\qa_db.php';
$obj=new qa_db();
$result=$obj->getAllQa();

?>
   <thead bgcolor="silver">
  <th>Select</th>
   <th>Title</th>
   <th>Description</th>
   <th>Image</th> 
   <th>Option 1</th> 
   <th>Option 2</th> 
   <th>Option 3</th> 
   <th>Option 4</th> 
   <th>Answer</th> 
   <th>Student year</th> 
   <th>Faculty email id</th> 
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_que_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$row['que_title']. '</td>';
      echo '<td>'.$row['que_desc']. '</td>';
      echo '<td>'.$row['que_img']. '</td>';
      echo '<td>'.$row['op_1']. '</td>';
      echo '<td>'.$row['op_2']. '</td>';
      echo '<td>'.$row['op_3']. '</td>';
      echo '<td>'.$row['op_4']. '</td>';
      echo '<td>'.$row['ans']. '</td>';
      echo '<td>'.$row['fk_student_year']. '</td>';
      echo '<td>'.$row['fk_email_id']. '</td>';
      echo '<td> <a href="qa_update.php?id='.  $row["pk_que_id"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
      
      </td>';
      echo '</tr>';
      
    }

    ?>

    
      </tbody> 
      </table>
      </div>
   
      <div align="left">
<input type="submit" class="btn btn-primary" value="DELETE ALL">
</div>  
    
<div align="right" >
<a href="qa_insert.php">
      <button type="button" right class="btn btn-primary">New</button>
    </a> 
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