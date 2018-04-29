<?php require'top.php';?>
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
	<h3 class="tittle-w3l">Download MBA Material
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
    
<!--	<center><font size="50px"><u>Download MBA Papers</u></font></center>-->
<section class="cd-faq">
	<ul class="cd-faq-categories">
		<li><a class="selected" href="#basics">First Year</a></li>
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
         $sql="select * from material_link_tbl where link_year='first' && link_address='mba' && link_sem='sem1'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 1</a>';
    
            
				echo'<div class="cd-faq-content">
            <a href="'.$row['first_link'].'">BUSINESS MANAGEMENT -1 </a><br>
            <a href="'.$row['second_link'].'">FUNDAMENTALS OF FINANCIAL ACCOUNTING</a><br>
            <a href="'.$row['third_link'].'">BASIC STATISTICS</a><br>
            <a href="'.$row['fourth_link'].'">FOUNDATION COURSE IN ECONOMICS</a><br>
            <a href="'.$row['fifth_link'].'">MERCANTILE LAW </a><br>
            <a href="'.$row['sixth_link'].'">COMMUNICATION SKILLS</a><br>
            <a href="'.$row['seventh_link'].'">INTRODUCTION TO INFORMATION TECHNOLOGY </a><br>
            <a href="'.$row['eighth_link'].'">INDIAN CULTURE AND CIVILIZATION</a><br>
            <a href="'.$row['ninth_link'].'">LEARNING FROM LEADERS</a>';
					
         
       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		 
			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year='first' && link_address='mba' && link_sem='sem2'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 2</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">ENVIRONMENTAL STUDIES</a><br>
            <a href="'.$row['second_link'].'">PERSONALITY DEVELOPEMENT </a><br>
            <a href="'.$row['third_link'].'">BUSINESS MANAGEMENT - 2</a><br>
            <a href="'.$row['fourth_link'].'">FUNDAMENTALS OF COST ACCOUNTING</a><br>
            <a href="'.$row['fifth_link'].'">BASIC MATHEMATICS</a><br>
            <a href="'.$row['sixth_link'].'">ELEMENTARY COURSE IN ECONOMICS</a><br>
            <a href="'.$row['seventh_link'].'">COMMERCIAL COMMUNICATION</a><br>
            <a href="'.$row['eighth_link'].'">GROWTH AND STRUCTURE OF INDUSTRIES</a><br>
            <a href="'.$row['ninth_link'].'">PROJECT</a>';
					
         
       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		 
		</ul> <!-- cd-faq-group -->

		<ul id="mobile">
			<li class="cd-faq-title"><h2>Second Year</h2></li><br>
    
             <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year='second' && link_address='mba' && link_sem='sem3'";
         $result=$cnn->query($sql);
        
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 3</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">INTRODUCTION TO RESEARCH METHODOLOGY</a><br>
            <a href="'.$row['second_link'].'">HUMANITIES – 1</a><br>
            <a href="'.$row['third_link'].'">INTRODUCTION TO MARKETING MANAGEMENT </a><br>
            <a href="'.$row['fourth_link'].'">ADVANCED FINANCIAL ACCOUNTING – 1 </a><br>
            <a href="'.$row['fifth_link'].'">BUSINESS MATHEMATICS</a><br>
            <a href="'.$row['sixth_link'].'">MICRO ECONOMICS – THEORY</a><br>
            <a href="'.$row['seventh_link'].'">SOFT SKILL DEVELOPMENT </a><br>
            <a href="'.$row['eighth_link'].'">DIRECT TAXES – I </a><br>
            <a href="'.$row['ninth_link'].'">PROJECT</a>';
					
         echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year='second' && link_address='mba' && link_sem='sem4'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
         echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 4</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'"> INTRODUCTION TO SCIENCE AND TECHNOLOGY</a><br>
            <a href="'.$row['second_link'].'">HUMANITIES – 2</a><br>
            <a href="'.$row['third_link'].'">FUNDAMENTALS OF FINANCIAL MANAGEMENT</a><br>
            <a href="'.$row['fourth_link'].'">ADVANCED FINANCIAL ACCOUNTING – 2</a><br>
            <a href="'.$row['fifth_link'].'">BUSINESS STATISTICS</a><br>
            <a href="'.$row['sixth_link'].'">FIRMS AND MARKETS</a><br>
            <a href="'.$row['seventh_link'].'">BUSINESS COMMUNICATION</a><br>
            <a href="'.$row['eighth_link'].'">DIRECT TAXES – II </a><br>
            <a href="'.$row['ninth_link'].'">PROJECT</a>';
				 echo '	</div> <!-- cd-faq-content -->';
			
 }
      
         ?>
           </li>

			</ul> <!-- cd-faq-group -->

		<ul id="account" >
			<li class="cd-faq-title"><h2>Third Year</h2></li><br>
			<?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year='third' && link_address='mba' && link_sem='sem5'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 5</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">HEALTH AND FITNESS MANAGEMENT</a><br>
            <a href="'.$row['second_link'].'">ENTREPRENEURSHIP DEVELOPEMENT </a><br>
            <a href="'.$row['third_link'].'">ORGANISATION BEHAVIOUR AND PERSONNEL MANAGEMENT</a><br>
            <a href="'.$row['fourth_link'].'">FINANCIAL ANALYSIS AND REPORTING</a><br>
            <a href="'.$row['fifth_link'].'">QUANTITATIVE TECHNIQUES</a><br>
            <a href="'.$row['sixth_link'].'">MACRO ECONOMICS </a><br>
            <a href="'.$row['seventh_link'].'">CORPORATE COMMUNICATION</a><br>
            <a href="'.$row['eighth_link'].'">PROJECT </a><br>
             <a href="'.$row['ninth_link'].'">FINANCIAL MANAGEMENT – I  </a><br>';
           
         echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year='third' && link_address='mba' && link_sem='sem6'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 6</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'"> WORLD GEOGRAPHY</a><br>
            <a href="'.$row['second_link'].'">HISTORY AND CULTURE OF GUJARAT</a><br>
            <a href="'.$row['third_link'].'">INDUSTRIAL RELATIONS AND PRODUCTION MANAGEMENT</a><br>
            <a href="'.$row['fourth_link'].'">COST AND MANAGEMENT ACCOUNTING</a><br>
            <a href="'.$row['fifth_link'].'">OPERATIONS RESEARCH</a><br>
            <a href="'.$row['sixth_link'].'">PUBLIC FINANCE, MONEY AND BANKING</a><br>
            <a href="'.$row['seventh_link'].'">BUSINESS ENGLISH </a><br>
            <a href="'.$row['eighth_link'].'">PROJECT </a><br>
           <a href="'.$row['ninth_link'].'">FINANCIAL MANAGEMENT – II  </a><br>';

            echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>  
		</ul> <!-- cd-faq-group -->

		<ul id="payments">
			<li class="cd-faq-title"><h2>Fourth Year</h2></li><br>
			<?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year='fourth' && link_address='mba' && link_sem='sem7'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
           echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 7</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">PRINCIPLES AND PRACTICES OF MANAGEMENT </a><br>
            <a href="'.$row['second_link'].'">QUANTITATIVE TECHNIQUES FOR MANAGEMENT – I </a><br>
            <a href="'.$row['third_link'].'">ORGANIZATIONAL BEHAVIOUR </a><br>
            <a href="'.$row['fourth_link'].'">MANAGERIAL ECONOMICS </a><br>
            <a href="'.$row['fifth_link'].'">MANAGEMENT INFORMATION SYSTEMS </a><br>
            <a href="'.$row['sixth_link'].'">FINANCIAL ACCOUNTING FOR MANAGEMENT</a><br>
            <a href="'.$row['seventh_link'].'">MANAGERIAL COMMUNICATION </a><br>
            <a href="'.$row['eighth_link'].'">ETHICS, ETHOS AND VALUES</a><br>';
         echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year='fourth' && link_address='mba' && link_sem='sem8'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 8</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'">QUANTITATIVE TECHNIQUES FOR MANAGEMENT – II</a><br>
            <a href="'.$row['second_link'].'">ADVANCED MARKETING MANAGEMENT </a><br>
            <a href="'.$row['third_link'].'">HUMAN RESOURCE DEVELOPMENT </a><br>
            <a href="'.$row['fourth_link'].'">ADVANCED COST AND MANAGEMENT ACCOUNTING</a><br>
            <a href="'.$row['fifth_link'].'">PRODUCTION AND OPERATIONS MANAGEMENT </a><br>
            <a href="'.$row['sixth_link'].'">INDIAN BUSINESS ENVIRONMENT </a><br>
            <a href="'.$row['seventh_link'].'">ADVANCED FINANCIAL MANAGEMENT </a><br>
            <a href="'.$row['eighth_link'].'">BUSINESS RESEARCH METHODOLOGY</a><br>';
           
         echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		 	  	</ul> <!-- cd-faq-group -->

		<ul id="privacy">
			<li class="cd-faq-title"><h2>Fifth Year</h2></li><br>
			<?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year='fifth' && link_address='mba' && link_sem='sem9'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >Semester 9</a>';
    
            
				echo'<div class="cd-faq-content">
            <a href="'.$row['first_link'].'"></a><br>
            <a href="'.$row['second_link'].'"></a><br>
            <a href="'.$row['third_link'].'"></a><br>
            <a href="'.$row['fourth_link'].'"></a><br>
            <a href="'.$row['fifth_link'].'"></a><br>
            <a href="'.$row['sixth_link'].'"></a><br>
            <a href="'.$row['seventh_link'].'"></a><br>
            <a href="'.$row['eighth_link'].'"></a><br>';
            echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from material_link_tbl where link_year='fifth' && link_address='mba' && link_sem='sem10'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
           echo '<li class="product-sec1">';
        
            echo '  <a  class="cd-faq-trigger" >Semester 10</a>';
    
            
				echo'<div class="cd-faq-content">
         <a href="'.$row['first_link'].'"></a><br>';
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
<?php require'bottom.php';?>