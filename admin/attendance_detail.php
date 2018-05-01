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
 <form action="attendance_detail.php"  name="attendance_form" method="post">
 
 <h3 class='page-header'>Manage Student</h3>

 
 <div class="dataTables_wrapper">
 <h4><table class="table table-hover table-striped" id="tableData" >
     <thead bgcolor="silver">
     <th>Sr No.</th>
     <th>Student Roll Number</th>
     <th>Attendance Status</th>
     <th>Update</th>
     </thead>
     <tbody>
<?php
   // if(isset($_POST["submit"])){
        $_date=$_GET["date"];
       // echo 'date='.$_date;
        $_email=$_SESSION["eid"];
    require '../shared/attendance_db.php';
    $obj=new attendance_db();
    $res=$obj->getAllAttendance($_date,$_email);
    if($res){
        $ctr=1;
        while($row=$res->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$ctr.'</td>';
            echo '<td>'.$row["fk_stu_rno"].' </td>';
            echo '<td>'.$row["attendance_status"].' </td>';
            echo '<td> <a href="attendance_update_show.php?rno='.  $row["fk_stu_rno"] .'">
                        <span class="glyphicon glyphicon-pencil btn btn-lg"></span></a></td>';
            echo '</tr>';
           $ctr++;
        }
       
    }
   // }
?>

</tbody> 
      </table></h4>
      </div>

      
      <div align="left">
<input type="submit" class="btn btn-primary " name="submit" value="Insert Attendance">
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