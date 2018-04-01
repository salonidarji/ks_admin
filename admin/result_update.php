<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
<?php 

$_id=$_GET["id"];
$n_sub=0;
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
$_rno=$row["fk_stu_rno"];
$year=$row["stu_year"];
$sem=$row["stu_semister"];
$sub1=$row["sub1_name"];
$sub1_marks=$row["sub1_marks"];
$sub2=$row["sub2_name"];
$sub2_marks=$row["sub2_marks"];
$sub3=$row["sub3_name"];
$sub3_marks=$row["sub3_marks"];
$sub4=$row["sub4_name"];
$sub4_marks=$row["sub4_marks"];
$sub5=$row["sub5_name"];
$sub5_marks=$row["sub5_marks"];
$sub6=$row["sub6_name"];
$sub6_marks=$row["sub6_marks"];
$sub7=$row["sub7_name"];
$sub7_marks=$row["sub7_marks"];
$sub8=$row["sub8_name"];
$sub8_marks=$row["sub8_marks"];
$sub9=$row["sub9_name"];
$sub9_marks=$row["sub9_marks"];
if($_type==1)
{
  $sel_1="selected";
  $sel_2="";
}
else if($_type==2){
  $sel_2="selected";
  $sel_1="";
}
else{
  $sel_1="";
  $sel_2="";
}


if($sem>=1 && $sem<=9)
{
  $n_sub=9;
  if($sem==9 && $sem==8 && $sem==7 && $sem==6 && $sem==5)
  {
    $n_sub=8;
   
  }
}
else if($sem==10)
{
  $n_sub=1;
  
}
else{
  $n_sub=0;
}

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
                <option value="1" <?php echo $sel_1; ?>>Final Exam</option>
                <option value="2" <?php echo $sel_2; ?>>Mid Exam</option>
                </select>
             </td></tr>
             <tr><td>Email Id :</td><td><input type="email" name="txtemail" class="form-control" value="<?php echo $_email; ?>"/> </td></tr>
             <tr><td>Roll Number :</td><td><input type="number" name="txtrno" class="form-control" readonly value="<?php echo $_rno; ?>"/> </td></tr>
<?php
echo '
<tr><td><input type="text" name="txtsub1" class="form-control" readonly value="'.$sub1.':"/> </td>
        <td><input type="number" name="txtsub1_marks" class="form-control" value="'.$sub1_marks.'"/> </td></tr>
        
<tr><td><input type="text" name="txtsub2" class="form-control" readonly value="'.$sub2.':"/> </td>
        <td><input type="number" name="txtsub2_marks" class="form-control" value="'.$sub2_marks.'"/> </td></tr>
        
<tr><td><input type="text" name="txtsub3" class="form-control" readonly value="'.$sub3.':"/> </td>
        <td><input type="number" name="txtsub3_marks" class="form-control" value="'.$sub3_marks.'"/> </td></tr>
        
<tr><td><input type="text" name="txtsub4" class="form-control" readonly value="'.$sub4.':"/> </td>
        <td><input type="number" name="txtsub4_marks" class="form-control" value="'.$sub4_marks.'"/> </td></tr>
        
<tr><td><input type="text" name="txtsub5" class="form-control" readonly value="'.$sub5.':"/> </td>
        <td><input type="number" name="txtsub5_marks" class="form-control" value="'.$sub5_marks.'"/> </td></tr>
        
<tr><td><input type="text" name="txtsub6" class="form-control" readonly value="'.$sub6.':"/> </td>
        <td><input type="number" name="txtsub6_marks" class="form-control" value="'.$sub6_marks.'"/> </td></tr>
        
<tr><td><input type="text" name="txtsub7" class="form-control" readonly value="'.$sub7.':"/> </td>
        <td><input type="number" name="txtsub7_marks" class="form-control" value="'.$sub7_marks.'"/> </td></tr>
        
<tr><td><input type="text" name="txtsub8" class="form-control" readonly value="'.$sub8.':"/> </td>
        <td><input type="number" name="txtsub8_marks" class="form-control" value="'.$sub8_marks.'"/> </td></tr>
        
<tr><td><input type="text" name="txtsub9" class="form-control" readonly value="'.$sub9.':"/> </td>
        <td><input type="number" name="txtsub9_marks" class="form-control" value="'.$sub9_marks.'"/> </td></tr>
        <td><input type="number" name="txtrno" class="form-control" required/> </td></tr>
        <tr><td>Enter Grade Point: </td>';
 $_SESSION["n_sub"]=$n_sub;
 $_SESSION["year"]=$year;
 $_SESSION["sem"]=$sem;
?>       
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