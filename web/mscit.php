<?php require 'top.php'; ?>
    <h3 class="tittle-w3l">MSCIT PLACEMENT
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=2";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
             echo '<table class="table">';
             echo '<tr><td><img src="'.$row["gallary_url"].'"></td>';
             
              echo '<td colspan="2"></td>';
             echo '<td>';
             

         }
         ?>
         <b>Placement cell plays a vital role in shaping the career of an individual. We have a placement cell for the students of MSC (CA&IT) programme.
         
         At our institute, the placement process is a team work where the Directors,Placement Co-ordinators,Faculty members and students work in an aligned manner right from brochure designing, visiting companies to closing the process successfully.
         
         We offer Placement services to studentsafter graduation,8 week Internship at the end of fourth year and final placement in the fifth year.Many well-known domestic and international Information Technology companies are our regular recruiters.
         
         </td></tr></table>
       		 <?php
	require 'slider_db.php';
	$obj_slider=new slider_db();
	$res=$obj_slider->getmSlider();
	?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">



<!-- Wrapper for slides -->
<div class="carousel-inner">
  
<?php
$active=0;
while($row=$res->fetch_assoc())
{
	if($active==0)
	{
	echo '<div class="item active">
	<img src="'.$row['slider_img'].'" alt="Chicago" style="width:100%;">
  </div>';
  $active++;
	}
	else
	{
	 
	echo '<div class="item">
	<img src="'.$row['slider_img'].'" alt="Chicago" style="width:100%;">
  </div>';	
	}
}
?> 
<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</div>
<?php require 'bottom.php'; ?>