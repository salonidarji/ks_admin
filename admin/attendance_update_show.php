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
 <form action="attendance_update.php"  name="attendance_form" method="post">
 
 <h3 class='page-header'>Manage Attendance</h3>

<h3> <div class="text-center"><?php echo "Date: ".date("Y-m-d"); ?>  </div> </h3>
 <div class="dataTables_wrapper">
 <h4><table class="table table-hover table-striped" id="tableData" >
     <thead bgcolor="silver">
         <th>Sr No.</th>
<th>Student Roll Number</th>
<th>Attendance Status</th>
</thead>
<tbody>
<?php
$rno=$_GET["rno"];
$email=$_SESSION["eid"];
    require '../shared/attendance_db.php';
    $obj=new attendance_db();
    $res=$obj->getAttendanceRno($rno,$email);
    if(mysqli_num_rows($res) >0){
        $ctr=1;
        $check_p="";
        $check_a="";
        $cnt_status=1;
        while($row=$res->fetch_assoc()){
            if($row["attendance_status"]=="P"){ $check_p="checked ";} else { $check_p="";}
            if($row["attendance_status"]=="A"){ $check_a="checked ";} else { $check_a="";}
            echo '<tr>';
            echo '<td>'.$ctr.'</td>';
            echo '<td>'.$row["fk_stu_rno"].'
            <input type="text" name="txtaid['.$cnt_status.']" hidden value="'.$row["pk_id"].'" </td>
                    <input type="text" name="txtrno['.$cnt_status.']" hidden value="'.$row["fk_stu_rno"].'" </td>';
            echo '<td>
            
            <input type="radio" name="status['.$cnt_status.']" value="P" '.$check_p.' >Present
            <input type="radio" name="status['.$cnt_status.']" value="A" '.$check_a.'>Absent </td>';
            echo '</tr>';
            $cnt_status++;
            $ctr++;
        }
       
    }

?>

</tbody> 
      </table></h4>
      </div>

      <div align="left">
<input type="submit" class="btn btn-primary " name="submit" value="Update Attendance">
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