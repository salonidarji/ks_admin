<?php require 'top.php'; ?>	
<!-- //carousesl -->
	<?php
	require '../shared/slider_db.php';
	$obj_slider=new slider_db();
	$res=$obj_slider->getHomeSlider();
	?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">



<!-- Wrapper for slides -->
<div class="carousel-inner">
  <div class="item active">
	<img src="../resources/slider/main.jpg" alt="Los Angeles" style="width:100%;">
  </div>
<?php
while($row=$res->fetch_assoc())
{
	echo '
  <div class="item">
	<img src="'.$row['slider_img'].'" alt="Chicago" style="width:100%;">
  </div>';
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

	
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Updates
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					<div class="product-sec1" >
						<?php
		 $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from notice_tbl where notice_address='News'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
        
						echo'<h3 class="heading-tittle">'.$row["notice_title"].'</h3><br>';
							echo'<div align="center"> '.$row["notice_desc"].'</div>';
							echo'<a href="'.$row["notice_link"].'"><center>'.$row["notice_title"].' </center></a>';	
		 	
		
		 }
		 ?>					
						<div class="clearfix"></div>
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1">
							<?php
		 $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from notice_tbl where notice_address='Announcements'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
        
						echo'<h3 class="heading-tittle">'.$row["notice_title"].'</h3><br>';
							echo'<div align="center"> '.$row["notice_desc"].'</div>';	
		 }
		 ?>			
						<div class="clearfix"></div>
					</div>
					<div class="product-sec1">
							<?php
		 $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from notice_tbl where notice_address='Events'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
        
						echo'<h3 class="heading-tittle">'.$row["notice_title"].'</h3><br>';
							echo'<div align="center"> '.$row["notice_desc"].'</div>';	
		 }
		 ?>				
						<div class="clearfix"></div>
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">KS GALLERY
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->

	<div class="content-bottom-in">
				<ul id="flexiselDemo1">
		<?php
		 $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from album_tbl";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
					echo'<li>';
						echo'<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="gallary.php">
									<img  class="img-responsive" src="'.$row["url"].'" height="300px" width="300px">
								</a>
							</div>
							</div>
					</li>';
		 }
		 ?>
					
				</ul>
			</div>
</div>
	</div>
			
	<!-- //special offers -->
	<!-- newsletter -->
	<?php require 'bottom.php'; ?>