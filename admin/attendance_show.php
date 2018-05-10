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
 <form action="attendance_delete.php"  name="attendance_form" method="post">
 
 <h3 class='page-header'>Manage Student</h3>

 
 <div class="dataTables_wrapper">
 <h4><table class="table table-hover table-striped" id="tableData" >
     <thead bgcolor="silver">
     <th><input type="checkbox" name="select-all" id="select-all" /> Select-All</th>
<th>Date</th>
<th>Action</th>

</thead>
<tbody>
<?php

    require '../shared/attendance_db.php';
    $obj=new attendance_db();
    $res=$obj->getAllDate();
    if($res){
        $ctr=1;
        while($row=$res->fetch_assoc()){
            $id=$row["date"];
            echo '<tr>';

              echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> 
              <a href="attendance_delete_one.php?id='.$id .'"><span class="glyphicon glyphicon-trash btn btn-lg"></span></a>
              </td>';
            echo '<td>'.$row["date"].'</td>';
               echo '
                <input type="hidden" name="date" value="'.$row['date'].'">
                <td><a href="attendance_detail.php?date='.$row['date'].'" class="btn btn-success btn-block">View More</a></td>
               ';  
            echo '</tr>';
            $ctr++;
        }
       
    }

?>

</tbody> 
      </table></h4>
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