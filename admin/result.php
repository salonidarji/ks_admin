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
      <table class="table table-hover table-bordered table-striped " id="tableData" >
      <?php 
require '..\shared\result_db.php';
$obj=new result_db();
$result=$obj->getAllResult();

?>
   <thead bgcolor="silver">
  <th><input type="checkbox" name="select-all" id="select-all" /> Select-All</th>
   <th>Type</th>
   <th>Student Email Id</th>
   <th>Student Roll No.</th>
   <th>Student GPA</th>
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    $modal_cnt=1;
    while($row=$result->fetch_assoc())
    {
      if($row["result_type"]==1)
      {
        $type="Final Exam";
      }
      else if($row["result_type"]==2){
        $type="Mid Semister Exam";
      }
      else{
        $type="Not Available";
      }
      $id=$row["pk_result_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$type. '</td>';
      echo '<td>'.$row['fk_email_id']. '</td>';
      echo '<td>'.$row['fk_stu_rno']. '</td>';
      echo '<td>'.$row['stu_gpa']. '</td>';
     
      echo '<td> <a href="result_update.php?id='.  $row["pk_result_id"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
           <a href="result_delete_one.php?id='.  $row["pk_result_id"] .'"><span class="glyphicon glyphicon-trash btn"></span></a>';
           echo '<a type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-md'.$modal_cnt.'"><span class="glyphicon glyphicon-chevron-right btn-lg" aria-hidden="true"></span></a>
           </td>';
           
           echo '</tr>';
     
           
     echo '
     <div class="modal  fade bd-example-modal-md'.$modal_cnt.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-md">
       
         <div class="modal-content " >
         <div class="modal-header ">
             <h3 class="modal-title" id="exampleModalLongTitle"> Details of subject
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button></h3>
           </div>
         <!-- grid-->
         
         <div class="row container" >
         <h3>Roll Number :: '.$row["fk_stu_rno"].'</h3>
          <div class="col-md-4">
           <div> <h4>Subject Name</h4> </div>
            <br>'.$row["sub1_name"].'
            <br>'.$row["sub2_name"].'
            <br>'.$row["sub3_name"].'
            <br>'.$row["sub4_name"].'
            <br>'.$row["sub5_name"].'
            <br>'.$row["sub6_name"].'
            <br>'.$row["sub7_name"].'
            <br>'.$row["sub8_name"].'
            <br>'.$row["sub9_name"].'
           </div>
             <div class="col-md-8">
             <h4>Subject Marks</h4>
             <br>'.$row["sub1_marks"].'
             <br>'.$row["sub2_marks"].'
             <br>'.$row["sub3_marks"].'
             <br>'.$row["sub4_marks"].'
             <br>'.$row["sub5_marks"].'
             <br>'.$row["sub6_marks"].'
             <br>'.$row["sub7_marks"].'
             <br>'.$row["sub8_marks"].'
             <br>'.$row["sub9_marks"].'
             </div>
        </div>
       <div class="btn-info">
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