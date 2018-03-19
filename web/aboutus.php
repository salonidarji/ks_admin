<?php require 'top.php'; ?>
  <h3 class="tittle-w3l">About Us
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            	 <?php
	require '../shared/slider_db.php';
	$obj_slider=new slider_db();
	$res=$obj_slider->getaboutSlider();
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
	<img src="'.$row['slider_img'].'" style="width:100%;">
  </div>';
  $active++;
	}
	else
	{
	 
	echo '<div class="item">
	<img src="'.$row['slider_img'].'" style="width:100%;">
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

<div class="container">
   <br> K. S. School of Business Management is one of the pioneer institutes offering Integrated MBA and MSc (Computer Applications & Information Technology) in India. Established under the aegis of Gujarat University, KSSBM started with five year integrated programme in MBA in 1993, followed by five year integrated programme in MSc (CA&IT) in 1998. Both the programmes have grown in size and stature, attracting Gujarat state´s young budding students after their 12th standard from all walks of life.

Our mission at the school is "Igniting young minds to grow in terms of knowledge and wisdom and stand up high in the corporate world". With the support of syllabus updated to the latest changes in subject and content on the lines of CBCS pattern, project study and field study, students are nurtured and groomed in five years to meet the industry expectation. And this is made possible by the unconditional support of highly qualified faculty members who are endowed with rich experience in academia and industry with a single motive of "committed to contribute".

The institute is located in the rich flora and fauna environment of Gujarat University campus. The institute is equipped with state of the art facilities like LCD projectors, 3 computer laboratories with latest version of hardware and software, library with rich collection of books, journals and other learning aids.

Full fledged Placement Cell, under the guidance of faculty placement coordinator, is operational for each of the courses separately. The placement heads of the respective courses groom the students to face companies in interviews and facilitate students´ smooth transition from college to corporate. Over the years, our Alumni are spread across national and international borders.

To harness the skills and personality of students, the school constantly engages students in co-curricular and extra curricular activities. Academic and cultural events and competitions are held regularly, giving the students opportunity to show case their talents.
</div>

<?php require 'bottom.php'; ?>