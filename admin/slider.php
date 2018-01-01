<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="slider_delete.php" name="slider_form" method="post">
   



<div class="dataTables_wrapper">
<table class="table table-hover table-bordered table-striped" id="tableData" >
<h3 class='title'>Slider </h3>
<hr>
      <?php 
require '..\shared\slider_db.php';
$obj=new slider_db();
$result=$obj->getAllSlider();

?>
   <thead bgcolor="silver">
  <th>Select</th>
   <th>Image</th>
   <th>Count</th>
   <th>Time</th> 
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_slider_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td> <img src="'.$row['slider_img']. '" height="50" widht="50" alt="Image not available"></td>';
      echo '<td>'.$row['slider_count']. '</td>';
      echo '<td>'.$row['slider_time']. '</td>';
      echo '<td> <a href="slider_update.php?id='.  $row["pk_slider_id"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
      
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
<a href="slider_insert.php">
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