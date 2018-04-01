
  <?php require 'top.php'; ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="qa_delete.php" name="qa_form" method="post">

<table class="table">
<tr><td>
<h3 class='page-header'> Manage Question-Answer </h3>
</td>
<td>
<div align="right" >
<a href="qa_insert.php">
      <button type="button" right class="btn btn-primary">New</button>
    </a> 
</div>
</td></tr>
</table>

<div class="dataTables_wrapper">
<h4><table class="table table-hover table-bordered table-striped" id="tableData" >
      <?php 
require '..\shared\qa_db.php';
$obj=new qa_db();
$result=$obj->getQaEmail($_SESSION["eid"]);
if(mysqli_num_rows($result) > 0)
{
?>
   <thead bgcolor="silver">
  <th><input type="checkbox" name="select-all" id="select-all" /> Select-All</th>
   <th>Title</th>
   <th>Image</th> 
   <th>Answer</th>
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    $modal_cnt=1;
    while($row=$result->fetch_assoc())
    {
      $id=$row["pk_que_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$row['que_title']. '</td>';
      echo '<td><img src="'.$row['que_img']. '" height="50" width="50" alt="NA"></td>';
      echo '<td>'.$row['ans']. '</td>';
      
      echo '<td> <a href="qa_update.php?id='.  $row["pk_que_id"] .'"><span class="glyphicon glyphicon-pencil btn btn-lg"></span></a>
           <a href="qa_delete_one.php?id='.  $row["pk_que_id"] .'"><span class="glyphicon glyphicon-trash btn btn-lg"></span></a>';
           echo '<a type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-md'.$modal_cnt.'"><span class="glyphicon glyphicon-chevron-right btn-lg" aria-hidden="true"></span></a>
           </td>';
           
           echo '</tr>';
     
           
     echo '
     <div class="modal  fade bd-example-modal-md'.$modal_cnt.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-md">
       
         <div class="modal-content btn-info" >
         <div class="modal-header ">
             <h3 class="modal-title" id="exampleModalLongTitle">'.$row['que_title']. '
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button></h3>
           </div>
         <!-- thumbnail-->
         <div class="row" >
         <div class="col-md-12">
           <div class="thumbnail">
             <img src="'.$row['que_img']. '" alt="'.$row['que_title']. '" height="100%" width="100%">
             <div class="caption">
             <div> <h4>For : '.$row['fk_student_year']. ' Year Students</h4> </div>
               <h5>'.$row['que_desc']. '</h5>
               Options Are :<br>
               A . '.$row['op_1']. '<br>
               B . '.$row['op_2']. '<br>
               C . '.$row['op_3']. '<br>
               D . '.$row['op_4']. '<br>
               Answer : . '.$row['ans']. '<br>
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
       
         
        }
        else{

          echo '<div class="alert alert-danger">
          You have not Givven any question answer
          </div>';
        }   

    ?>

    
      </tbody> 
      </table></h4>
      </div>
      <?php
      if(mysqli_num_rows($result) > 0)
      {
        echo '
      <div align="left">
   <input type="submit" class="btn btn-primary" value="DELETE ALL">
   </div>';
      }
      ?>
    

           
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