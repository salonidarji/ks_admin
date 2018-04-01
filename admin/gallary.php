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
      <form action="gallary_delete.php" name="gallary_form" method="post" enctype="multipart/form-Data">
      <table class="table">
      <tr><td>
      <h3 class='page-header'>Manage Gallary </h3>
      </td>
      <td>
      <div align="right" >
      <a href="gallary_insert.php">
            <button type="button" right class="btn btn-primary">New</button>
          </a> 
      </div>
      </td></tr>
      </table>
      
      <div class="dataTables_wrapper">
      <table class="table table-hover table-bordered table-striped" id="tableData" >
      <?php 
require '..\shared\gallary_db.php';
$obj=new gallary_db();
$result=$obj->getAllgallary();

?>
   <thead bgcolor="silver">
  <th><input type="checkbox" name="select-all" id="select-all" /> Select-All</th>
   <th>Type</th>
   <th>Album</th>
   <th> Title</th> 
   <th>Url</th> 
   
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_gallary_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$row['gallary_type']. '</td>';
      echo '<td>'.$row['fk_album_id']. '</td>';
      echo '<td>'.$row['gallary_title']. '</td>';
      echo '<td><img src="'.$row['gallary_url']. '" height="50px" width="50px"></td>';

      echo '<td> <a href="gallary_update.php?id='.  $row["pk_gallary_id"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
           <a href="gallary_delete_one.php?id='.  $row["pk_gallary_id"] .'"><span class="glyphicon glyphicon-trash btn"></span></a>';
      echo '<a   type="button" class="btn  btn-md" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></td>';
      
      echo '</tr>';
      
    }

    ?>

    
      </tbody> 
      </table>

<!-- Trigger the modal with a button 
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
        <?php // echo $_GET['id']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

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
  <?php } ?>
<?php require 'bottom.php'; ?>