<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="album_delete.php" name="album_form" method="post">
   



<div class="dataTables_wrapper">
<table class="table table-hover table-bordered table-striped" id="tableData" >
<h3 class='title'>Album </h3>
<hr>
      <?php 
require '..\shared\album_db.php';
$obj=new album_db();
$result=$obj->getAllAlbum();

?>
   <thead bgcolor="silver">
  <th>Select</th>
   <th>Name</th>
   
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_album_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$row['album_name']. '</td>';
      echo '<td> <a href="album_update.php?id='.  $row["pk_album_id"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
      
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
<a href="album_insert.php">
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