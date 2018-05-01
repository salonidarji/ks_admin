<?php require'top.php';?>
<?php
if(!isset($_SESSION["eid"])){
echo '<h1><div align="center" class="alert alert-danger">
<span class="glyphicon glyphicon-warning-sign">  First Do Sign-In</span>
</div></h1>';
}
else{
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="faq-template-master/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="faq-template-master/css/style.css"> <!-- Resource style -->
	<script src="faq-template-master/js/modernizr.js"></script> <!-- Modernizr -->
	<title>FAQ Template | CodyHouse</title>
</head>
<body>
	<h3 class="tittle-w3l">Download MSC Material
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
    
<!--	<center><font size="50px"><u>Download MBA Papers</u></font></center>-->
<section class="cd-faq">
	<ul class="cd-faq-categories">
		<li><a  href="#basics">First Year</a></li>
		<li><a href="#mobile">Second Year</a></li>
		<li><a href="#account">Third Year</a></li>
		<li><a href="#payments">Fourth Year</a></li>
		<li><a href="#privacy">Fifth Year</a></li>
		
	</ul> <!-- cd-faq-categories -->

	<div class="cd-faq-items">
		<ul id="basics" >
         <li class="cd-faq-title" ><h2><b>First Year</b></h2></li><br>
    
             
       </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year=1 && link_address='msc' && link_sem=1";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 1</a>';
    
            
				echo'<div class="cd-faq-content">
            <a href="'.$row['first_link'].'">FUNDAMENTALS OF MANAGEMENT</a><br>
            <a href="'.$row['second_link'].'">FINANCIAL ACCOUNTING AND MANAGEMENT</a><br>
            <a href="'.$row['third_link'].'">FUNDAMENTALS OF PROGRAMMING</a><br>
            <a href="'.$row['fourth_link'].'">FUNDAMENTALS OF COMPUTER ORGANIZATION</a><br>
            <a href="'.$row['fifth_link'].'">MATHEMATICAL CONCEPTS</a><br>
            <a href="'.$row['sixth_link'].'">COMMUNICATION SKILLS</a><br>
            <a href="'.$row['seventh_link'].'">DATABASE MANAGEMENT SYSTEMS CONCEPTS </a><br>
            <a href="'.$row['eighth_link'].'">IMPLEMENTATION OF C (PRACTICAL ON CC-113)</a><br>
            <a href="'.$row['ninth_link'].'">IMPLEMENTATION OF OFFICE
      APPLICATIONS(PRACTICAL)</a>';
					
         
       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		 
			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year=1 && link_address='msc' && link_sem=2";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 2</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">ENVIRONMENTAL STUDIES</a><br>
            <a href="'.$row['second_link'].'">TAXATION LAWS</a><br>
            <a href="'.$row['third_link'].'">MATRIX ALGEBRA AND GRAPH THEORY</a><br>
            <a href="'.$row['fourth_link'].'">DATABASE MANAGEMENT SYSTEMS USING SQL /PLSQL</a><br>
            <a href="'.$row['fifth_link'].'">COMMERCIAL COMMUNICATION</a><br>
            <a href="'.$row['sixth_link'].'">ADVANCE C PROGRAMMING</a><br>
            <a href="'.$row['seventh_link'].'">IMPLEMENTATION OF SQL/PLSQL
      (PRACTICAL ON CC-124) </a><br>
            <a href="'.$row['eighth_link'].'">IMPLEMENTATION OF C PROGRAMMING (PRACTICAL ON CC-126)</a><br>
            <a href="'.$row['ninth_link'].'">MULTIMEDIA (PRACTICAL)</a>';
					
         
       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		 
		</ul> <!-- cd-faq-group -->

		<ul id="mobile">
			<li class="cd-faq-title"><h2>Second Year</h2></li><br>
    
             <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year=2 && link_address='msc' && link_sem=3";
         $result=$cnn->query($sql);
        
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 3</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">FUNDAMENTALS OF ECONOMICS</a><br>
            <a href="'.$row['second_link'].'">SOFT SKILL DEVELOPMENT</a><br>
            <a href="'.$row['third_link'].'">COMPUTER ORIENTED STATISTICAL METHODS</a><br>
            <a href="'.$row['fourth_link'].'">CONCEPTS OF OPERATING SYSTEM</a><br>
            <a href="'.$row['fifth_link'].'">OBJECT ORIENTED PROGRAMMING WITH C++</a><br>
            <a href="'.$row['sixth_link'].'">DATA STRUCTURES</a><br>
            <a href="'.$row['seventh_link'].'">DISCRETE MATHEMATICS </a><br>
            <a href="'.$row['eighth_link'].'">IMPLEMENTATION OF C++ (PRACTICAL ON CC-235)</a><br>
            <a href="'.$row['ninth_link'].'">IMPLEMENTATION OF DATA STRUCTURE (PRACTICAL ON CC-236)</a>';
					
         echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year=2 && link_address='msc' && link_sem=4";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
         echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 4</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">INTRODUCTION TO HUMANITIES</a><br>
            <a href="'.$row['second_link'].'">BUSINESS COMMUNICATION</a><br>
            <a href="'.$row['third_link'].'">COMPUTER ORIENTED NUMERICAL METHODS</a><br>
            <a href="'.$row['fourth_link'].'">OPEN SOURCE TECHNOLOGY</a><br>
            <a href="'.$row['fifth_link'].'">SYSTEM ANALYSIS , DESIGN AND MODELING</a><br>
            <a href="'.$row['sixth_link'].'">CLIENT SERVER ARCHITECTURE</a><br>
            <a href="'.$row['seventh_link'].'">IMPLEMENTATION OF OPEN SOURCE TECHNOLOGY (PRACTICAL ON CC-244) </a><br>
            <a href="'.$row['eighth_link'].'">WEB TECHNOLOGY (PRACTICAL) javascript / vb script/xml</a><br>
            <a href="'.$row['ninth_link'].'">IMPLEMENTATION OF CLIENT SERVER ARCHITECTURE (PRACTICAL ON CC-246)</a>';
				 echo '	</div> <!-- cd-faq-content -->';
			
 }
      
         ?>
           </li>

			</ul> <!-- cd-faq-group -->

		<ul id="account" >
			<li class="cd-faq-title"><h2>Third Year</h2></li><br>
			<?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year=3 && link_address='msc' && link_sem=5";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 5</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">CYBER LAW AND INTELLECTUAL PROPERTY</a><br>
            <a href="'.$row['second_link'].'">TECHNICAL COMMUNICATION</a><br>
            <a href="'.$row['third_link'].'">SOFTWARE ENGINEERING</a><br>
            <a href="'.$row['fourth_link'].'">COMPUTER GRAPHICS</a><br>
            <a href="'.$row['fifth_link'].'">CORE JAVA</a><br>
            <a href="'.$row['sixth_link'].'">IMPLEMENTATION OF COMPUTER GRAPHICS ( PRACTICAL ON KS_C_FC-354)</a><br>
            <a href="'.$row['seventh_link'].'">IMPLEMENTATION OF CORE JAVA(PRACTICAL ON KS_C_CC-355) </a><br>
            <a href="'.$row['eighth_link'].'">SOFTWARE PROJECT DEVELOPMENT-I </a><br>';
           
         echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year=3 && link_address='msc' && link_sem=6";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 6</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'"> ADVANCED JAVA / ADVANCED WEB TECHNOLOGY</a><br>
            <a href="'.$row['second_link'].'">RESEARCH METHODOLOGY</a><br>
            <a href="'.$row['third_link'].'">DATA COMMUNICATION AND NETWORKING</a><br>
            <a href="'.$row['fourth_link'].'">SYSTEM SOFTWARE</a><br>
            <a href="'.$row['fifth_link'].'">E-COMMERCE AND E-GOVERNANCE</a><br>
            <a href="'.$row['sixth_link'].'">IMPLEMENTATION OF DATA COMMUNICATION AND NETWORKING  (PRACTICAL ON CC-363)</a><br>
            <a href="'.$row['seventh_link'].'">IMPLEMENTATION OF SYSTEM SOFTWARE (PRACTICAL ON CC -364 ) </a><br>
            <a href="'.$row['eighth_link'].'">SOFTWARE DEVELOPMENT</a><br>';
            echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>  
		</ul> <!-- cd-faq-group -->

		<ul id="payments">
			<li class="cd-faq-title"><h2>Fourth Year</h2></li><br>
			<?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year=4 && link_address='msc' && link_sem=7";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
           echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 7</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">ADVANCED DATABASE SYSTEMS</a><br>
            <a href="'.$row['second_link'].'">CORPORATE COMMUNICATION & BUSINESS ENGLISH</a><br>
            <a href="'.$row['third_link'].'">OPERATIONS RESEARCH</a><br>
            <a href="'.$row['fourth_link'].'">ARTIFICIAL INTELLIGENCE</a><br>
            <a href="'.$row['fifth_link'].'">ADVANCED NETWORKING</a><br>
            <a href="'.$row['sixth_link'].'">SOFTWARE PROJECT MANAGEMENT & TESTING</a><br>
            <a href="'.$row['seventh_link'].'">ENTERPRISE RESOURCE PLANNING </a><br>
            <a href="'.$row['eighth_link'].'">PROJECT DEVELOPMENT ON  KS_C_CC-474</a><br>';
         echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year=4 && link_address='msc' && link_sem=8";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 8</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">CLOUD COMPUTING</a><br>
            <a href="'.$row['second_link'].'">MASS COMMUNICATION</a><br>
            <a href="'.$row['third_link'].'">QUANTITATIVE TECHNIQUES</a><br>
            <a href="'.$row['fourth_link'].'">MOBILE COMPUTING</a><br>
            <a href="'.$row['fifth_link'].'">SOFT COMPUTING </a><br>
            <a href="'.$row['sixth_link'].'">MANAGEMENT INFORMATION SYSTEM</a><br>
            <a href="'.$row['seventh_link'].'">DATA WAREHOUSING & DATA MINING </a><br>
            <a href="'.$row['eighth_link'].'">DISSERTATION</a><br>';
           
         echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		 	  	</ul> <!-- cd-faq-group -->

		<ul id="privacy">
			<li class="cd-faq-title"><h2>Fifth Year</h2></li><br>
			<?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year=5 && link_address='msc' && link_sem=9";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 9</a>';
    
            
				echo'<div class="cd-faq-content">
            <a href="'.$row['first_link'].'">NETWORK SECURITY</a><br>
            <a href="'.$row['second_link'].'">NETWORK ADMINISTRATION</a><br>
            <a href="'.$row['third_link'].'">GEOGRAPHICAL INFORMATION SYSTEM</a><br>
            <a href="'.$row['fourth_link'].'">CRYPTOGRAPHY</a><br>
            <a href="'.$row['fifth_link'].'">INTERNET APPLICATIONS</a><br>
            <a href="'.$row['sixth_link'].'">DISTRIBUTED OPERATING SYSTEM</a><br>
            <a href="'.$row['seventh_link'].'">DATA COMPRESSION</a><br>
            <a href="'.$row['eighth_link'].'">PRACTICAL</a><br>';
            echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year=5 && link_address='msc' && link_sem=10";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
           echo '<li class="product-sec1">';
        
            echo '  <a  class="cd-faq-trigger" >Semester 10</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">GRAND PROJECT (6 MONTHS)</a><br>';
                   echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		</ul> <!-- cd-faq-group -->

		
	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script src="faq-template-master/js/jquery-2.1.1.js"></script>
<script src="faq-template-master/js/jquery.mobile.custom.min.js"></script>
<script src="faq-template-master/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
      <?php } require'bottom.php';?>