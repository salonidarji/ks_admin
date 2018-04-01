<?php require 'top.php'; ?>
<h3 class="tittle-w3l">Result
       
<span class="heading-style">
    <i></i>
    <i></i>
    <i></i>
</span>
</h3>
<?php
require '../shared/result_db.php';
$obj=new result_db();
$res=$obj->getResult($_SESSION["eid"]);
$row=$res->fetch_assoc();
$gpa=$row["stu_gpa"];
if($gpa>0.50)
{
  if($gpa>=4.16){
    $cgpa=4.3;
   
  }
  else if($gpa>=3.86 && $gpa<=4.15){
    $cgpa=4.0;
  }
  else if($gpa>=3.51 && $gpa<=3.85){
    $cgpa=3.7;
  }
  else if($gpa>=3.16 && $gpa<=3.50){
    $cgpa=3.3;
  }
  else if($gpa>=2.86 && $gpa<=3.15){
    $cgpa=3.0;
  }
  else if($gpa>=2.51 && $gpa<=2.85){
    $cgpa=2.7;
  }
  else if($gpa>=2.16 && $gpa<=2.50){
    $cgpa=2.3;
  }
  else if($gpa>=1.86 && $gpa<=2.15){
    $cgpa=2.0;
  }
  else if($gpa>=1.51 && $gpa<=1.85){
    $cgpa=1.7;
  }
  else if($gpa>=1.16 && $gpa<=1.50){
    $cgpa=1.3;
  }
  else if($gpa>=0.86 && $gpa<=1.15){
    $cgpa=1.0;
  }
  else if($gpa>=0.51 && $gpa<=0.85){
    $cgpa=0.7;
  }
  else if( $gpa<=0.50){
    $cgpa=0.0;
  }
  $percentage=($cgpa * 2 ) * 10;
}
else{
  $percentage="FAIL";
}

?>
<div class="container">
<div class="product-sec1" align="center">
<div class="table-responsive">
  <table>
  <tr><th>Grade Point (GP) : </th><td><?php echo  $gpa; ?></td></tr>
  <tr><th>Grade Point Average (GPA) : </th> <td><?php echo  $cgpa; ?></td></tr>
  <tr><th>Percentage:</th><td><?php echo $percentage; ?> %</td></tr>
  </table>
</div>
</div>

<form name="result" action="" method="post">
<div class="product-sec1">
<div class="table-responsive">
<table class="table">

<thead>
<tr>
<th>Subject Name</th>
<th>Subject Marks</th>
</tr>
</thead>
<?php 
$n=0;
$sem=$row["stu_semister"];
if($sem>=1 && $sem<=9)
{
  $n=9;
  if($sem==9 || $sem==8 || $sem==7 || $sem==6 || $sem==5)
  {
    $n=8;
   
  }
}
else if($sem==10)
{
  $n=1;
  
}
else{
  $n=0;
}
for($i=1;$i<=$n;$i++){
    echo '<tr><td>'.$row["sub".$i."_name"].'</td><td>'.$row["sub".$i."_marks"].'</td></tr>';
}
?>

</table>
</div>
</div>
</form>
</div>

<?php require 'bottom.php'; ?>