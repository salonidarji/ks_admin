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
$id=0;
$course="";
  if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
  $year=$_POST["selyear"];
  $sem=$_POST["selsem"];
    $course=$_POST["selcourse"];
  require '../shared/material_link_db.php';
  $obj=new material_link_db();
  $res=$obj->getLink($year,$sem,$course);  
  if($res){
      $row=$res->fetch_assoc();
      $id=$row["link_id"];
      $_SESSION["img1"]=$row["first_link"];
      $_SESSION["img2"]=$row["second_link"];
      $_SESSION["img3"]=$row["third_link"];
      $_SESSION["img4"]=$row["fourth_link"];
      $_SESSION["img5"]=$row["fifth_link"];
      $_SESSION["img6"]=$row["sixth_link"];
      $_SESSION["img7"]=$row["seventh_link"];
      $_SESSION["img8"]=$row["eighth_link"];
      $_SESSION["img9"]=$row["ninth_link"];
  }


    if($year==1 && $sem==1 && $course="msc"){
      $sub1="FUNDAMENTALS OF MANAGEMENT";
      $sub2="FINANCIAL ACCOUNTING AND MANAGEMENT";
      $sub3="FUNDAMENTALS OF PROGRAMMING";
      $sub4="FUNDAMENTALS OF COMPUTER ORGANIZATION";
      $sub5="MATHEMATICAL CONCEPTS";
      $sub6="COMMUNICATION SKILLS";
      $sub7="DATABASE MANAGEMENT SYSTEMS CONCEPTS ";
      $sub8="IMPLEMENTATION OF C (PRACTICAL ON CC-113)";
      $sub9="IMPLEMENTATION OF OFFICE
      APPLICATIONS(PRACTICAL)";
      
    }
    else if($year==1 && $sem==2 && $course="msc"){
      $sub1="ENVIRONMENTAL STUDIES";
      $sub2="TAXATION LAWS";
      $sub3="MATRIX ALGEBRA AND GRAPH THEORY";
      $sub4="DATABASE MANAGEMENT SYSTEMS USING SQL /PLSQL";
      $sub5="COMMERCIAL COMMUNICATION ";
      $sub6="ADVANCE C PROGRAMMING ";
      $sub7="IMPLEMENTATION OF SQL/PLSQL
      (PRACTICAL ON CC-124)";
      $sub8="IMPLEMENTATION OF C PROGRAMMING (PRACTICAL ON CC-126)";
      $sub9="MULTIMEDIA (PRACTICAL)";
    }
    else if($year==2 && $sem==3 && $course="msc"){
      $sub1="FUNDAMENTALS OF ECONOMICS";
      $sub2="SOFT SKILL DEVELOPMENT";
      $sub3="COMPUTER ORIENTED STATISTICAL METHODS";
      $sub4="CONCEPTS OF OPERATING SYSTEM";
      $sub5="OBJECT ORIENTED PROGRAMMING WITH C++ ";
      $sub6="DATA STRUCTURES";
      $sub7="DISCRETE MATHEMATICS ";
      $sub8="IMPLEMENTATION OF C++ (PRACTICAL ON CC-235)";
      $sub9="IMPLEMENTATION OF DATA STRUCTURE (PRACTICAL ON CC-236) ";
    }
    else if($year==2 && $sem==4 && $course="msc"){
      $sub1="INTRODUCTION TO HUMANITIES";
      $sub2="BUSINESS COMMUNICATION";
      $sub3="COMPUTER ORIENTED NUMERICAL METHODS ";
      $sub4="OPEN SOURCE TECHNOLOGY";
      $sub5="SYSTEM ANALYSIS , DESIGN AND
      MODELING";
      $sub6="CLIENT SERVER ARCHITECTURE";
      $sub7="IMPLEMENTATION OF OPEN SOURCE TECHNOLOGY (PRACTICAL ON CC-244)";
      $sub8="WEB TECHNOLOGY (PRACTICAL) javascript / vb script/xml";
      $sub9="IMPLEMENTATION OF CLIENT SERVER ARCHITECTURE (PRACTICAL ON CC-246)";
    }
    else if($year==3 && $sem==5 && $course="msc"){
      $sub1="CYBER LAW AND INTELLECTUAL PROPERTY";
      $sub2="TECHNICAL COMMUNICATION";
      $sub3=" SOFTWARE ENGINEERING";
      $sub4=" COMPUTER GRAPHICS";
      $sub5="CORE JAVA";
      $sub6="IMPLEMENTATION OF COMPUTER GRAPHICS ( PRACTICAL ON KS_C_FC-354)";
      $sub7="IMPLEMENTATION OF CORE JAVA(PRACTICAL ON KS_C_CC-355)";
      $sub8="SOFTWARE PROJECT DEVELOPMENT-I ";
     
    }
    else if($year==3 && $sem==6 && $course="msc"){
      $sub1=" ADVANCED JAVA / ADVANCED WEB
      TECHNOLOGY";
      $sub2="RESEARCH METHODOLOGY";
      $sub3="DATA COMMUNICATION AND
      NETWORKING
      ";
      $sub4="SYSTEM SOFTWARE";
      $sub5="E-COMMERCE AND E-GOVERNANCE";
      $sub6="IMPLEMENTATION OF DATA
      COMMUNICATION AND NETWORKING
      (PRACTICAL ON CC-363)";
      $sub7="IMPLEMENTATION OF SYSTEM
      SOFTWARE (PRACTICAL ON CC -364 )
      ";
      $sub8="SOFTWARE DEVELOPMENT";
    }
    else if($year==4 && $sem==7 && $course="msc"){
      $sub1="ADVANCED DATABASE
      SYSTEMS";
      $sub2="CORPORATE COMMUNICATION & BUSINESS
      ENGLISH
      ";
      $sub3="OPERATIONS RESEARCH";
      $sub4="ARTIFICIAL INTELLIGENCE";
      $sub5="ADVANCED NETWORKING";
      $sub6="SOFTWARE PROJECT MANAGEMENT &
      TESTING
      ";
      $sub7="ENTERPRISE RESOURCE PLANNING";
      $sub8="PROJECT DEVELOPMENT ON
      KS_C_CC-474";
    }
    else if($year==4 && $sem==8 && $course="msc"){
      $sub1="CLOUD COMPUTING
      ";
      $sub2="MASS COMMUNICATION";
      $sub3="QUANTITATIVE TECHNIQUES";
      $sub4="MOBILE COMPUTING";
      $sub5=" SOFT COMPUTING ";
      $sub6="MANAGEMENT INFORMATION SYSTEM";
      $sub7="DATA WAREHOUSING & DATA MINING";
      $sub8=" DISSERTATION";
    }
    else if($year==5 && $sem==9 && $course="msc"){
      $sub1="NETWORK SECURITY";
      $sub2="NETWORK ADMINISTRATION";
      $sub3="GEOGRAPHICAL INFORMATION
      SYSTEM";
      $sub4="CRYPTOGRAPHY";
      $sub5="INTERNET APPLICATIONS";
      $sub6="DISTRIBUTED OPERATING SYSTEM";
      $sub7="DATA COMPRESSION";
      $sub8="PRACTICAL";
    }
    else if($year==5 && $sem==10 && $course="msc"){
      $sub1="GRAND PROJECT (6 MONTHS) ";
      
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
<form method="post" action="material_link_update.php">
<div class="form-group">
<tr <?php echo $hide; ?> ><td>Course :</td><td>
                <select name="selcourse" class="form-control" >
                <option value="0">--Select Type--</option>
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
     

<form method="post" action="material_link_update_code.php" enctype="multipart/form-data">

<div class="form-group">
<?php
if($n_sub>1)
{
  echo '
 
<tr><td><input type="text" name="txtsub1" class="form-control" readonly value="'.$sub1.':"/> </td>
        <td><input type="file" name="link1" class="form-control" /> </td></tr>
        
<tr><td><input type="text" name="txtsub2" class="form-control" readonly value="'.$sub2.':"/> </td>
        <td><input type="file" name="link2" class="form-control" /> </td></tr>
        
<tr><td><input type="text" name="txtsub3" class="form-control" readonly value="'.$sub3.':"/> </td>
        <td><input type="file" name="link3" class="form-control" /> </td></tr>
        
<tr><td><input type="text" name="txtsub4" class="form-control" readonly value="'.$sub4.':"/> </td>
        <td><input type="file" name="link4" class="form-control" /> </td></tr>
        
<tr><td><input type="text" name="txtsub5" class="form-control" readonly value="'.$sub5.':"/> </td>
        <td><input type="file" name="link5" class="form-control" /> </td></tr>
        
<tr><td><input type="text" name="txtsub6" class="form-control" readonly value="'.$sub6.':"/> </td>
        <td><input type="file" name="link6" class="form-control" /> </td></tr>
        
<tr><td><input type="text" name="txtsub7" class="form-control" readonly value="'.$sub7.':"/> </td>
        <td><input type="file" name="link7" class="form-control" /> </td></tr>
        
<tr><td><input type="text" name="txtsub8" class="form-control" readonly value="'.$sub8.':"/> </td>
        <td><input type="file" name="link8" class="form-control" /> </td></tr>
'; }
else if($n_sub==1){
  echo '
  
        <tr><td><input type="text" name="txtsub1" class="form-control" readonly value="'.$sub1.':"/> </td>
        <td><input type="file" name="link1" class="form-control" /> </td></tr>   ';
      }
else{
}
       
        if($n_sub==9){
          echo '<tr><td><input type="text" name="txtsub9" class="form-control" readonly value="'.$sub9.':"/> </td>
        <td><input type="file" name="link9" class="form-control" /> </td></tr>
        ';}


        $_SESSION["n_sub"]=$n_sub;
        $_SESSION["year"]=$year;
        $_SESSION["sem"]=$sem;
        $_SESSION["id"]=$id;
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
        <?php } require 'bottom.php'; ?>