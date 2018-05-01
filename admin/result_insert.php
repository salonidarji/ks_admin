<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
          
<?php
$type="";
$sub1="";
$sub2="";
$sub3="";
$sub4="";
$sub5="";
$sub6="";
$sub7="";
$sub8="";
$sub9="";
$n_sub=0;
$hide="";
$year=0;
$sem=0;
$course="";
  if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $type=$_POST["seltype"];
  $year=$_POST["selyear"];
  $sem=$_POST["selsem"];
  $course=$_POST["selcourse"];
    
  require '../shared/subject_db.php';
  $obj = new subject_db();
  $res=$obj->getAllSubject($year,$sem,$course);
  if($res){
        while($row=$res->fetch_assoc()){
          if($sem >= 5 && $sem <=9){
            $sub1=$row["sub1"];
            $sub2=$row["sub2"];
            $sub3=$row["sub3"];
            $sub4=$row["sub4"];
            $sub5=$row["sub5"];
            $sub6=$row["sub6"];
            $sub7=$row["sub7"];
            $sub8=$row["sub8"];
          }
          else if($sem >= 1 && $sem <=4){
            $sub1=$row["sub1"];
            $sub2=$row["sub2"];
            $sub3=$row["sub3"];
            $sub4=$row["sub4"];
            $sub5=$row["sub5"];
            $sub6=$row["sub6"];
            $sub7=$row["sub7"];
            $sub8=$row["sub8"];
            $sub9=$row["sub9"];
          }
          else if($sem==10){
            $sub1=$row["sub1"];
          }
        }
  }
  else{
    echo '<div class="alert-danger">
    Invalid selection 
</div>';
  }

    

    if($sem>=1 && $sem<=9)
    {
      $n_sub=9;
      if($sem==9 || $sem==8 || $sem==7 || $sem==6 || $sem==5)
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
    $hide="hidden"; 
}
?>
      
<table class="table" >
<form method="post" action="result_insert.php">
<div class="form-group">
<tr <?php echo $hide; ?> ><td>Type :</td><td>
                <select name="seltype" class="form-control" >
                <option value="0">--Select Type--</option>
                <option value="1">Final Exam</option>
                <option value="2">Mid Exam</option>
                </select>
             </td></tr>
 <tr <?php echo $hide; ?> ><td>Course :</td><td>
                <select name="selcourse" class="form-control" >
                <option value="0">--Select Course--</option>
                <option value="msc">MSC(CA & IT)</option>
                <option value="mba">MBA</option>
                </select>
             </td></tr>
             <tr <?php echo $hide; ?> ><td>Select Year :</td><td>
             <select name="selyear" class="form-control" >
             <option value="0">--Select Year--</option>
             <option value="1">First</option>
             <option value="2">Second</option>
             <option value="3">Third</option>
             <option value="4">Fourth</option>
             <option value="5">Fifth</option>
            </select>
          </td></tr>
          <tr <?php echo $hide; ?> ><td>Select Semister :</td><td>
                <select name="selsem" class="form-control" onchange="this.form.submit()">
                <option value="0">--Select Semister--</option>
                <option value="1">one</option>
                <option value="2">two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
                <option value="6">Six</option>
                <option value="7">Seven</option>
                <option value="8">Eight</option>
                <option value="9">Nine</option>
                <option value="10">Ten</option>
               </select>
             </td></tr>
             </div>
             </form>
     

<form method="post" action="result_insert_code.php">
<div class="form-group">
<?php
if($n_sub>1)
{
  echo '
  <tr hidden>
        <td><input type="number" name="txttype" value="'. $type.'" /> </td></tr>
<tr><td>Roll number: </td>
        <td><input type="number" name="txtrno" class="form-control" required/> </td></tr>
        <tr><td>Enter Grade Point: </td>
        <td><input type="text" name="txtgpa" class="form-control" required/> </td></tr>
<tr><td><input type="text" name="txtsub1" class="form-control" readonly value="'.$sub1.':"/> </td>
        <td><input type="number" name="txtsub1_marks" class="form-control" required/> </td></tr>
        
<tr><td><input type="text" name="txtsub2" class="form-control" readonly value="'.$sub2.':"/> </td>
        <td><input type="number" name="txtsub2_marks" class="form-control" required/> </td></tr>
        
<tr><td><input type="text" name="txtsub3" class="form-control" readonly value="'.$sub3.':"/> </td>
        <td><input type="number" name="txtsub3_marks" class="form-control" required/> </td></tr>
        
<tr><td><input type="text" name="txtsub4" class="form-control" readonly value="'.$sub4.':"/> </td>
        <td><input type="number" name="txtsub4_marks" class="form-control" required/> </td></tr>
        
<tr><td><input type="text" name="txtsub5" class="form-control" readonly value="'.$sub5.':"/> </td>
        <td><input type="number" name="txtsub5_marks" class="form-control" required/> </td></tr>
        
<tr><td><input type="text" name="txtsub6" class="form-control" readonly value="'.$sub6.':"/> </td>
        <td><input type="number" name="txtsub6_marks" class="form-control" required/> </td></tr>
        
<tr><td><input type="text" name="txtsub7" class="form-control" readonly value="'.$sub7.':"/> </td>
        <td><input type="number" name="txtsub7_marks" class="form-control" required/> </td></tr>
        
<tr><td><input type="text" name="txtsub8" class="form-control" readonly value="'.$sub8.':"/> </td>
        <td><input type="number" name="txtsub8_marks" class="form-control" required/> </td></tr>
'; }
else if($n_sub==1){
  echo '
  
  <tr hidden>
        <td><input type="number" name="txttype" value="'. $type.'" /> </td></tr>
<tr><td>Roll number: </td>
        <td><input type="number" name="txtrno" class="form-control" required/> </td></tr>
        <tr><td>Enter Grade Point: </td>
        <td><input type="text" name="txtgpa" class="form-control" required/> </td></tr>
        <tr><td><input type="text" name="txtsub1" class="form-control" readonly value="'.$sub1.':"/> </td>
        <td><input type="number" name="txtsub1_marks" class="form-control" required/> </td></tr>   ';
      }
else{
}
       
        if($n_sub==9){
          echo '<tr><td><input type="text" name="txtsub9" class="form-control" readonly value="'.$sub9.':"/> </td>
        <td><input type="number" name="txtsub9_marks" class="form-control" required/> </td></tr>
        ';}


        $_SESSION["n_sub"]=$n_sub;
        $_SESSION["year"]=$year;
        $_SESSION["sem"]=$sem;
        $_SESSION["course"]=$course;
      ?>
   

<tr><td colspan="2"><input type="submit" name="btninsert" value="INSERT" class="form-control btn btn-info "/></td></tr>
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