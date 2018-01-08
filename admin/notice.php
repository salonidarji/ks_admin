<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="notice_delete.php" name="notice_form" method="post">
      <table class="table">
      <tr><td>
      <h3 class='page-header'>Manage Notice </h3>
      </td>
      <td>
      <div align="right" >
      <a href="notice_insert.php">
            <button type="button" right class="btn btn-primary">New</button>
          </a> 
      </div>
      </td></tr>
      </table>
      
      <div class="dataTables_wrapper">
      <table class="table table-hover table-bordered table-striped" id="tableData" >
      <?php 
require '..\shared\notice_db.php';
$obj=new notice_db();
$result=$obj->getAllNotice();

?>
   <thead bgcolor="silver">
  <th>Select</th>
   <th>Title</th>
   <th>Description</th>
   <th>Link</th> 
   <th>Start Date</th> 
   <th>End Count</th> 
   <th>Owner Email Id</th> 
   <th>Year</th> 
   <th colspan="2">Action</th> 
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_notice_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$row['notice_title']. '</td>';
      echo '<td>'.$row['notice_desc']. '</td>';
      echo '<td>'.$row['notice_link']. '</td>';
      echo '<td>'.$row['notice_start_date']. '</td>';
      echo '<td>'.$row['notice_end_count']. '</td>';
      echo '<td>'.$row['fk_email_id']. '</td>';
      echo '<td>'.$row['notice_year']. '</td>';
      echo '<td> <a href="notice_update.php?id='.  $row["pk_notice_id"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
      
      </td>
      <td> <a href="notice_delete_one.php?id='.  $row["pk_notice_id"] .'"><span class="glyphicon glyphicon-trash btn"></span></a>
      
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