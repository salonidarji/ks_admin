<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="result_delete.php" name="result_form" method="post">
   

      <table class="table">
      <tr><td>
      <h3 class='page-header'>Manage Result </h3>
      </td>
      <td>
      <div align="right" >
      <a href="result_insert.php">
            <button type="button" right class="btn btn-primary">New</button>
          </a> 
      </div>
      </td></tr>
      </table>
      
      <div class="dataTables_wrapper">
      <table class="table table-hover table-bordered table-striped" id="tableData" >
      <?php 
require '..\shared\result_db.php';
$obj=new result_db();
$result=$obj->getAllResult();

?>
   <thead bgcolor="silver">
  <th>Select</th>
   <th>Type</th>
   <th>Student Email Id</th>
   <th>Subject 1:</th> 
   <th>Subject 1 Marks:</th> 
   <th>Subject 2:</th> 
   <th>Subject 2 Marks:</th>
   <th>Subject 3:</th> 
   <th>Subject 3 Marks:</th>
   <th>Subject 4:</th> 
   <th>Subject 4 Marks:</th>
   <th>Subject 5:</th> 
   <th>Subject 5 Marks:</th>
   <th>Subject 6:</th> 
   <th>Subject 6 Marks:</th>
   <th>Subject 7:</th> 
   <th>Subject 7 Marks:</th>
   <th>Subject 8:</th> 
   <th>Subject 8 Marks:</th>
   <th>Subject 9:</th> 
   <th>Subject 9 Marks:</th>
   
   <th colspan="2">Action</th> 
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_result_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$row['result_type']. '</td>';
      echo '<td>'.$row['fk_email_id']. '</td>';
      echo '<td>'.$row['sub1_name']. '</td>';
      echo '<td>'.$row['sub1_marks']. '</td>';
      echo '<td>'.$row['sub2_name']. '</td>';
      echo '<td>'.$row['sub2_marks']. '</td>';
      echo '<td>'.$row['sub3_name']. '</td>';
      echo '<td>'.$row['sub3_marks']. '</td>';
      echo '<td>'.$row['sub4_name']. '</td>';
      echo '<td>'.$row['sub4_marks']. '</td>';
      echo '<td>'.$row['sub5_name']. '</td>';
      echo '<td>'.$row['sub5_marks']. '</td>';
      echo '<td>'.$row['sub6_name']. '</td>';
      echo '<td>'.$row['sub6_marks']. '</td>';
      echo '<td>'.$row['sub7_name']. '</td>';
      echo '<td>'.$row['sub7_marks']. '</td>';
      echo '<td>'.$row['sub8_name']. '</td>';
      echo '<td>'.$row['sub8_marks']. '</td>';
      echo '<td>'.$row['sub9_name']. '</td>';
      echo '<td>'.$row['sub9_marks']. '</td>';
     
     
      echo '<td> <a href="result_update.php?id='.  $row["pk_result_id"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
      
      </td>
      <td> <a href="result_delete_one.php?id='.  $row["pk_result_id"] .'"><span class="glyphicon glyphicon-trash btn"></span></a>
      
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