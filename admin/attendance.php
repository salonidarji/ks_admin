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
 <form action="attendance_insert.php"  name="attendance_form" method="post">
 
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
$_year=$_GET["year"];
$_SESSION["year"]=$_year;
if($_year >0 && $_year < 6){

    require '../shared/student_db.php';
    $obj=new student_db();
    $res=$obj->getStudentYear($_year);
    if($res){
        $ctr=1;

        $cnt_status=1;
        while($row=$res->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$ctr.'</td>';
            echo '<td>'.$row["pk_stu_rno"].'
                    <input type="text" name="txtrno['.$cnt_status.']" hidden value="'.$row["pk_stu_rno"].'" </td>';
            echo '<td><input type="radio" name="status['.$cnt_status.']" value="P">Present
            <input type="radio" name="status['.$cnt_status.']" value="A">Absent </td>';
            echo '</tr>';
            $cnt_status++;
            $ctr++;
        }
       
    }
}
else{
    echo 'wrong year have been selected';
}
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
     
<?php } require 'bottom.php'; ?>