<?php require 'top.php'; ?>
<?php if(!isset($_SESSION["eid"])){
  
}
else{

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="faq_delete.php" name="material_form" method="post" enctype="multipart/form-Data">
      <table class="table">
      <tr><td>
      <h3 class='page-header'>Frequently Asked Questions </h3>
      </td>
      <td>
      <div align="right" >
      <a href="faq_insert.php">
            <button type="button" right class="btn btn-primary">New</button>
          </a> 
      </div>
      </td></tr>
      </table>
      
      
      <div class="dataTables_wrapper">
      <h4><table class="table table-hover table-striped" id="tableData" >
      <?php 
require '..\shared\faq_db.php';
$obj=new faq_db();
$result=$obj->getAllFaq();

?>
   <thead bgcolor="silver">
  <th><input type="checkbox" name="select-all" id="select-all" /> Select-All</th>
   <th>Questions</th>
   
    
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    $modal_cnt=1;
    while($row=$result->fetch_assoc())
    {
        $id=$row["faq_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox"  name="chkdel[]" value="'.$id.'" > </td>';
      echo '<td>'.$row['faq_ques']. '</td>';
     
      
   
      
  
     echo '<td colspan="3"> <a href="faq_update.php?id='.  $row["faq_id"] .'"><span class="glyphicon glyphicon-pencil btn btn-lg"></span></a>';
     echo '    <a href="faq_delete_one.php?id='.  $row["faq_id"] .'"><span class="glyphicon glyphicon-trash btn btn-lg"></span></a>';
    
      echo ' <a type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-md'.$modal_cnt.'"><span class="glyphicon glyphicon-chevron-right btn-lg" aria-hidden="true"></span></a>
      </td>';
       echo '</tr>';
  

      
      
echo '
<div class="modal  fade bd-example-modal-md'.$modal_cnt.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
  
    <div class="modal-content btn-info" >
    <div class="modal-header ">
        <h3 class="modal-title" id="exampleModalLongTitle">'.$row['faq_ques']. '
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></h3>
      </div>
    <!-- thumbnail-->
    <div class="row" >
    <div class="col-md-12">
      <div class="thumbnail">
        
        <div class="caption">
        <div> <h4>Ans : '.$row['faq_ans']. ' </h4> </div>
        
        
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
  <?php } require 'bottom.php'; ?>