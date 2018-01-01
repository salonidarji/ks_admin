<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
<?php 
$_id=$_GET["id"];
require '..\shared\result_db.php';
/*$_obj=new result_db();
$result=$_obj->getResult($_id);
*/
$cnn= result_db::connect();
$sql="select * from result_tbl where pk_result_id=".$_id;

$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{

$_type=$row["result_type"];
$_email=$row["fk_email_id"];
$_sub1=$row["sub1_name"];
$_sub1_marks=$row["sub1_marks"];
$_sub2=$row["sub2_name"];
$_sub2_marks=$row["sub2_marks"];
$_sub3=$row["sub3_name"];
$_sub3_marks=$row["sub3_marks"];
$_sub4=$row["sub4_name"];
$_sub4_marks=$row["sub4_marks"];
$_sub5=$row["sub5_name"];
$_sub5_marks=$row["sub5_marks"];
$_sub6=$row["sub6_name"];
$_sub6_marks=$row["sub6_marks"];
$_sub7=$row["sub7_name"];
$_sub7_marks=$row["sub7_marks"];
$_sub8=$row["sub8_name"];
$_sub8_marks=$row["sub8_marks"];
$_sub9=$row["sub9_name"];
$_sub9_marks=$row["sub9_marks"];
}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="result_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Id :</td><td><input type="text" name="txtid" class="form-control" value="<?php echo $_id; ?>"/> </td></tr>
<tr><td>Type :</td><td>
                <select name="seltype">
                <option value="0">--Select Type--</option>
                <option value="1">Final Exam</option>
                <option value="2">Mid Exam</option>
                </select>
             </td></tr>
<tr><td>Email Id :</td><td><input type="email" name="txtemail" class="form-control" value="<?php echo $_email; ?>"/> </td></tr>

<tr><td>Subject 1 :</td><td><input type="text" name="txtsub1" class="form-control" value="<?php echo $_sub1; ?>"/> </td></tr>
<tr><td>Subject 1 Marks :</td><td><input type="number" name="txtsub1_marks" class="form-control" value="<?php echo $_sub1_marks; ?>"/> </td></tr>
<tr><td>Subject 2 :</td><td><input type="text" name="txtsub2" class="form-control" value="<?php echo $_sub2; ?>"/> </td></tr>
<tr><td>Subject 2 Marks :</td><td><input type="number" name="txtsub2_marks" class="form-control" value="<?php echo $_sub2_marks; ?>"/> </td></tr>
<tr><td>Subject 3 :</td><td><input type="text" name="txtsub3" class="form-control" value="<?php echo $_sub3; ?>"/> </td></tr>
<tr><td>Subject 3 Marks :</td><td><input type="number" name="txtsub3_marks" class="form-control" value="<?php echo $_sub3_marks; ?>"/> </td></tr>
<tr><td>Subject 4 :</td><td><input type="text" name="txtsub4" class="form-control" value="<?php echo $_sub4; ?>"/> </td></tr>
<tr><td>Subject 4 Marks :</td><td><input type="number" name="txtsub4_marks" class="form-control" value="<?php echo $_sub4_marks; ?>"/> </td></tr>
<tr><td>Subject 5 :</td><td><input type="text" name="txtsub5" class="form-control" value="<?php echo $_sub5; ?>"/> </td></tr>
<tr><td>Subject 5 Marks :</td><td><input type="number" name="txtsub5_marks" class="form-control" value="<?php echo $_sub5_marks; ?>"/> </td></tr>
<tr><td>Subject 6 :</td><td><input type="text" name="txtsub6" class="form-control" value="<?php echo $_sub6; ?>"/> </td></tr>
<tr><td>Subject 6 Marks :</td><td><input type="number" name="txtsub6_marks" class="form-control" value="<?php echo $_sub6_marks; ?>"/> </td></tr>
<tr><td>Subject 7 :</td><td><input type="text" name="txtsub7" class="form-control" value="<?php echo $_sub7; ?>"/> </td></tr>
<tr><td>Subject 7 Marks :</td><td><input type="number" name="txtsub7_marks" class="form-control" value="<?php echo $_sub7_marks; ?>"/> </td></tr>
<tr><td>Subject 8 :</td><td><input type="text" name="txtsub8" class="form-control" value="<?php echo $_sub8; ?>"/> </td></tr>
<tr><td>Subject 8 Marks :</td><td><input type="number" name="txtsub8_marks" class="form-control" value="<?php echo $_sub8_marks; ?>"/> </td></tr>
<tr><td>Subject 9 :</td><td><input type="text" name="txtsub9" class="form-control" value="<?php echo $_sub9; ?>"/> </td></tr>
<tr><td>Subject 9 Marks :</td><td><input type="number" name="txtsub9_marks" class="form-control" value="<?php echo $_sub9_marks; ?>"/> </td></tr>

<tr><td  colspan="2"><input type="submit" name="btnupdate" value="UPDATE"class="form-control btn  btn-info"/></td></tr>
</div>
</form>
</table>
</div>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require 'bottom.php'; ?>