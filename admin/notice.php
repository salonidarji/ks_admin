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
      <h4><table class="table table-hover table-striped" id="tableData" >
      <?php 
require '..\shared\notice_db.php';
$obj=new notice_db();
$result=$obj->getAllNotice();

?>
   <thead bgcolor="silver">
  <th><input type="checkbox" name="select-all" id="select-all" /> Select-All</th>
   <th>Title</th>
   
   <th>Link</th> 
  
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    $modal_cnt=1;
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_notice_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$row['notice_title']. '</td>';
     
      echo '<td><img src="'.$row['notice_link']. '" height="50" width="50" alt="NA"></td>';
      
     
      echo '<td> <a href="notice_update.php?id='.  $row["pk_notice_id"] .'"><span class="glyphicon glyphicon-pencil btn btn-lg"></span></a>
           <a href="notice_delete_one.php?id='.  $row["pk_notice_id"] .'"><span class="glyphicon glyphicon-trash btn btn-lg"></span></a>';
           echo '<a type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-md'.$modal_cnt.'"><span class="glyphicon glyphicon-chevron-right btn-lg" aria-hidden="true"></span></a>
           </td>';
           
           echo '</tr>';
     
           
     echo '
     <div class="modal  fade bd-example-modal-md'.$modal_cnt.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-md">
       
         <div class="modal-content btn-info" >
         <div class="modal-header ">
             <h3 class="modal-title" id="exampleModalLongTitle">'.$row['notice_title']. '
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button></h3>
           </div>
         <!-- thumbnail-->
         <div class="row" >
         <div class="col-md-12">
           <div class="thumbnail">
             <img src="'.$row['notice_link']. '" alt="'.$row['notice_title']. '" height="100%" width="100%">
             <div class="caption">
             <div> <h4>For : '.$row['notice_year']. ' Year Students </h4> </div>
             Valid From : '.$row['notice_start_date']. ' To : '.$row['notice_end_count']. '
             
               <h5>'.$row['notice_desc']. '</h5>
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
        <?php } ?>
 <?php require 'bottom.php'; ?>