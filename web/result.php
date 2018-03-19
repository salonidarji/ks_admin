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
?>
<div class="container">
<form name="result" action="" method="post">
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
</form>
</div>

<?php require 'bottom.php'; ?>