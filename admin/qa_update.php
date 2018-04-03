<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
<?php 
$que_id=$_GET["id"];
require '..\shared\qa_db.php';
/*$_obj=new qa_db();
$result=$_obj->getQa($que_id);
*/
$cnn= qa_db::connect();
$sql="select * from qa_tbl where pk_que_id=".$que_id;

$result=$cnn->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows==1)
{

$_title=$row["que_title"];
$_desc=$row["que_desc"];
$_img=$row["que_img"];
$_op1=$row["op_1"];
$_op2=$row["op_2"];
$_op3=$row["op_3"];
$_op4=$row["op_4"];
$_ans=$row["ans"];
$_year=$row["fk_student_year"];
$_email=$row["fk_email_id"];


}
?>
<div class="table-responsive">
<table class="table">
<form method="post" action="qa_update_code.php"  enctype="multipart/form-Data" >
<div class="form-group">
<tr><td>Id :</td><td><input type="text" name="txtid" class="form-control" value="<?php echo $que_id; ?>"/> </td></tr>
<tr><td>Title :</td><td><input type="text" name="txttitle" class="form-control" value="<?php echo $_title; ?>"/> </td></tr>
<tr><td>Description :</td><td><input type="text" name="txtdesc" class="form-control" value="<?php echo $_desc; ?>"/> </td></tr>

<tr><td>Image :</td><td><input type="file" name="txtimg" class="form-control" value="<?php echo $_img; ?>"/> </td></tr>
<tr><td>Option A :</td><td><input type="text" name="txtop1" class="form-control" value="<?php echo $_op1; ?>"/> </td></tr>
<tr><td>Option B:</td><td><input type="text" name="txtop2" class="form-control" value="<?php echo $_op2; ?>"/> </td></tr>
<tr><td>Option C :</td><td><input type="text" name="txtop3" class="form-control" value="<?php echo $_op3; ?>"/> </td></tr>
<tr><td>Option D :</td><td><input type="text" name="txtop4" class="form-control" value="<?php echo $_op4; ?>"/> </td></tr>
<tr><td>Answer :</td><td><input type="text" name="txtans" class="form-control" value="<?php echo $_ans; ?>"/> </td></tr>
<tr><td>Student Year:</td><td>
					<select name="selyear" class="form-control">
                    <option value="0">--Select Year--</option>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                    <option value="4">Fourth</option>
                    <option value="5">Fifth</option>
					</select>


        </td></tr>
        <tr><td>Address:</td><td>
            <select name="seladdress" class="form-control" >
            <option value="0"> --Select Address-- </option>
            <option value="mba"> MBA </option>
            <option value="msc"> MSC </option>
            <option value="academic"> Academic </option>
            <option value="holidays"> Holidays </option>
            

            </select>

					
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