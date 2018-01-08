<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="test_delete.php" name="test_form" method="post">
      <table class="table">
      <tr><td>
      <h3 class='page-header'>Manage Test </h3>
      </td>
      <td>
      <div align="right" >
      <a href="test_insert.php">
            <button type="button" right class="btn btn-primary">New</button>
          </a> 
      </div>
      </td></tr>
      </table>
      
      <div class="dataTables_wrapper">
      <table class="table table-hover table-bordered table-striped" id="tableData" >
      <?php 
require '..\shared\test_db.php';
$obj=new test_db();
$result=$obj->getAllTest();

?>
   <thead bgcolor="silver">
  <th>Select</th>
   <th>Student Email Id</th>
   <th>Correct Answer</th>
   <th>Wrong Answer</th> 
   <th colspan="2">Action</th> 
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_test_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$row['fk_email_id']. '</td>';
      echo '<td>'.$row['test_correct_cnt']. '</td>';
      echo '<td>'.$row['test_wrong_cnt']. '</td>';
      echo '<td> <a href="test_update.php?id='.  $row["pk_test_id"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
      
      </td>
      <td> <a href="test_delete_one.php?id='.  $row["pk_test_id"] .'"><span class="glyphicon glyphicon-trash btn"></span></a>
      
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