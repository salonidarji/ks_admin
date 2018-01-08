<?php require 'top.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="video_delete.php" name="video_form" method="post">
      <table class="table">
      <tr><td>
      <h3 class='page-header'>Manage Video </h3>
      </td>
      <td>
      <div align="right" >
      <a href="video_insert.php">
            <button type="button" right class="btn btn-primary">New</button>
          </a> 
      </div>
      </td></tr>
      </table>
      
      <div class="dataTables_wrapper">
      <table class="table table-hover table-bordered table-striped" id="tableData" >
      <?php 
require '..\shared\video_db.php';
$obj=new video_db();
$result=$obj->getAllVideo();

?>
   <thead bgcolor="silver">
  <th>Select</th>
   <th>Title</th>
   <th>Description</th>
   <th>Path</th> 
   <th colspan="2">Action</th> 
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_video_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td> '.$row['video_title']. '</td>';
      echo '<td>'.$row['video_desc']. '</td>';
      echo '<td>'.$row['video_url']. '</td>';
      echo '<td> <a href="video_update.php?id='.  $row["pk_video_id"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
      
      </td>
      <td> <a href="video_delete_one.php?id='.  $row["pk_video_id"] .'"><span class="glyphicon glyphicon-trash btn"></span></a>
      
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