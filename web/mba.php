<?php require 'top.php'; ?>
    <h3 class="tittle-w3l">MBA PLACEMENT
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=1";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
             echo '<table class="table">';
             echo '<tr><td><img src="'.$row["gallary_url"].'" height="300px" width="400px"></td>';
             
              echo '<td colspan="2"></td>';
             echo '<td>';
             

         }
         ?>
         <br><b><font color="black" size="4px"><br>K. S. School of Business Management has enjoyed the faith of the corporate world which is expressed through successful final placements and summer internships. All the placement activities are conducted through MBA placement cell headed by the placement officer. Each year the placement cell prepares a Placement Brochure which serves as a recruiters´ guide and contains detailed portrayal of the school and the students who are looking forward to placement.
         
         The final year students wanting to spread their wings in the corporate world are given special attention and are acculturated in professional values of fairness, objectivity, compassion, team work, commitment and super ordinations. They are tuned to the needs and demands of the business and industry through carefully designed co-curricular programmes. The placement season begins from third week of November each year.
         
        </font> </td></tr></table>




		 <?php
	require '../shared/slider_db.php';
	$obj_slider=new slider_db();
	$res=$obj_slider->getSlider();
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