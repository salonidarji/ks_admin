<?php require 'top.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
       
<?php 
$_rno=$_GET["id"];
require '..\shared\student_db.php';
/*$_obj=new student_db();
$result=$_obj->getStudent($_rno);
*/
$cnn= student_db::connect();
$sql="select * from student_tbl where pk_stu_rno=".$_rno;

$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{

$_email=$row["fk_email_id"];
$_name=$row["stu_name"];
$_mo_no=$row["stu_mobile_no"];
$_year=$row["stu_year"];
$_gen=$row["stu_gender"];
$_sem=$row["stu_semister"];
$_course=$row["fk_course_name"];
}
?>
<table class="table">
<form method="post" action="student_update_code.php">
<div class="form-group">
<tr><td>Roll Number :</td><td><input type="number" name="txtrno" readonly class="form-control" value="<?php echo $_rno; ?>"/> </td></tr>
<tr><td>Enrollment Number :</td><td><input type="number" name="txtenrol"  required class="form-control" /> </td></tr>
<tr><td>Email Id :</td><td><input type="email" name="txtemail" class="form-control" required value="<?php echo $_email; ?>"/> </td></tr>
<tr><td>Name:</td><td><input type="text" name="txtname" class="form-control" required value="<?php echo $_name; ?>"/> </td></tr>
<tr><td>Mobile Number:</td><td><input type="text" name="txtmo_no" required class="form-control" value="<?php echo $_mo_no; ?>"/> </td></tr>
<tr><td>Gender:</td><td>
                    <select class="form-control" name="selgen" required>
                    <option value="0">--Select Gender--</option>
                    <option value="male" <?=$_gen == 'male' ? ' selected="selected"' : '';?>>Male</option>
                    <option value="female" <?=$_gen == 'female' ? ' selected="selected"' : '';?>>Female</option>
                    
                    </select>

</td></tr>
<tr><td>Year :</td><td>
                    <select  class="form-control" name="selyear" required>
                    <option value="0">--Select Year--</option>
                    <option value="1" <?=$_year == '1' ? ' selected="selected"' : '';?>>First</option>
                    <option value="2" <?=$_year == '2' ? ' selected="selected"' : '';?>>Second</option>
                    <option value="3" <?=$_year == '3' ? ' selected="selected"' : '';?>>Third</option>
                    <option value="4" <?=$_year == '4' ? ' selected="selected"' : '';?>>Fourth</option>
                    <option value="5" <?=$_year == '5' ? ' selected="selected"' : '';?>>Fifth</option>
                    </select>
            </td></tr>
            <tr><td>Semister :</td><td>
                    <select class="form-control" name="selsem" required>
                    <option value="0">--Select Semister--</option>
                    <option value="1" <?=$_sem == '1' ? ' selected="selected"' : '';?>>one</option>
                    <option value="2" <?=$_sem == '2' ? ' selected="selected"' : '';?>>two</option>
                    <option value="3" <?=$_sem == '3' ? ' selected="selected"' : '';?>>Three</option>
                    <option value="4" <?=$_sem == '4' ? ' selected="selected"' : '';?>>Four</option>
                    <option value="5" <?=$_sem == '5' ? ' selected="selected"' : '';?>>Five</option>
                    <option value="6" <?=$_sem == '6' ? ' selected="selected"' : '';?>>Six</option>
                    <option value="7" <?=$_sem == '7' ? ' selected="selected"' : '';?>>Seven</option>
                    <option value="8" <?=$_sem == '8' ? ' selected="selected"' : '';?>>Eight</option>
                    <option value="9" <?=$_sem == '9' ? ' selected="selected"' : '';?>>Four</option>
                    <option value="10" <?=$_sem == '10' ? ' selected="selected"' : '';?>>Ten</option>
                    </select>
            </td></tr>
            <tr><td>Course:</td><td>
                    <select class="form-control" name="selcourse" required>
                    <option value="0">--Select Course--</option>
                    <option value="msc" <?=$_course == 'msc' ? ' selected="selected"' : '';?>>MSC</option>
                    <option value="mba" <?=$_course == 'mba' ? ' selected="selected"' : '';?>>MBA</option>
                    
                    </select>
            </td></tr>
<tr><td colspan="2"><input type="submit" name="btnupdate" value="UPDATE" class="form-control btn btn-info "/></td></tr>
</div>
</form>
</table></div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require 'bottom.php'; ?>