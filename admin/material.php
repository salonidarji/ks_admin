<?php require 'top.php'; ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="material_delete.php" name="material_form" method="post" enctype="multipart/form-Data">
      <table class="table">
      <tr><td>
      <h3 class='page-header'>Manage Material </h3>
      </td>
      <td>
      <div align="right" >
      <a href="material_insert.php">
            <button type="button" right class="btn btn-primary">New</button>
          </a> 
      </div>
      </td></tr>
      </table>
      
      
      <div class="dataTables_wrapper">
      <h4><table class="table table-hover table-striped" id="tableData" >
      <?php 
require '..\shared\material_db.php';
$obj=new material_db();
$result=$obj->getAllMaterial();

?>
   <thead bgcolor="silver">
  <th>Select</th>
   <th>Title</th>
   <th> PDF</th> 
    
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    $modal_cnt=1;
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_material_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox"  name="chkdel[]" value="'.$id.'" > </td>';
      echo '<td>'.$row['material_title']. '</td>';
     
      echo '<td><iframe src="'.$row['material_url']. '" height="50px" width="50px"></iframe></td>';
      
  
      echo '<td> <a href="material_update.php?id='.  $row["pk_material_id"] .'"><span class="glyphicon glyphicon-pencil btn btn-lg"></span></a>
           <a href="material_delete_one.php?id='.  $row["pk_material_id"] .'"><span class="glyphicon glyphicon-trash btn btn-lg"></span></a>';
      echo '<a type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-md'.$modal_cnt.'"><span class="glyphicon glyphicon-chevron-right btn-lg" aria-hidden="true"></span></a>
      </td>';
      
      echo '</tr>';

      
echo '
<div class="modal  fade bd-example-modal-md'.$modal_cnt.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
  
    <div class="modal-content btn-info" >
    <div class="modal-header ">
        <h3 class="modal-title" id="exampleModalLongTitle">'.$row['material_title']. '
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></h3>
      </div>
    <!-- thumbnail-->
    <div class="row" >
    <div class="col-md-12">
      <div class="thumbnail">
        <iframe src="'.$row['material_url']. '" alt="'.$row['material_title']. '" height="100%" width="100%"></iframe>
        <div class="caption">
        <div> <h4>For : '.$row['fk_student_year']. ' Year Students</h4> </div>
          <h5>'.$row['material_desc']. '</h5>
          <div align="right"> <h4>By , <a >'.$row['fk_email_id']. '</h4></a> </div>
        
         </div>
      </div>
    </div>
  </div>
   
    </div>
  </div>
</div>
    
    ';
      $modal_cnt++;
      
    }

    ?>

    
      </tbody> 
      </table>
  </h4>

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