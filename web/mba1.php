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
	<h3 class="tittle-w3l">Download MBA Papers
       
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
    
             <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2013-2014' && paper_address='mba' && fk_student_year='1' && paper_sem='1'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo ' <li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester1:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2013-2014' && paper_address='mba' && fk_student_year='1' && paper_sem='2'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester2:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2014-2015' && paper_address='mba' && fk_student_year='1' && paper_sem='1'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester1:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2014-2015' && paper_address='mba' && fk_student_year='1' && paper_sem='2'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester2:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2015-2016' && paper_address='mba' && fk_student_year='1' && paper_sem='1'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester1:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2015-2016' && paper_address='mba' && fk_student_year='1' && paper_sem='2'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester2:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		     <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2016-2017' && paper_address='mba' && fk_student_year='1' && paper_sem='1'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester1:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2016-2017' && paper_address='mba' && fk_student_year='1' && paper_sem='2'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester2:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>
           

		</ul> <!-- cd-faq-group -->

		<ul id="mobile">
			<li class="cd-faq-title"><h2>Second Year</h2></li><br>
    
             <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2013-2014' && paper_address='mba' && fk_student_year='2' && paper_sem='3'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo ' <li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester3:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2013-2014' && paper_address='mba' && fk_student_year='2' && paper_sem='4'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester4:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2014-2015' && paper_address='mba' && fk_student_year='2' && paper_sem='3'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester3:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2014-2015' && paper_address='mba' && fk_student_year='2' && paper_sem='4'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester4:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2015-2016' && paper_address='mba' && fk_student_year='2' && paper_sem='3'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester3:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2015-2016' && paper_address='mba' && fk_student_year='2' && paper_sem='4'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester4:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		     <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2016-2017' && paper_address='mba' && fk_student_year='2' && paper_sem='3'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester3:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2016-2017' && paper_address='mba' && fk_student_year='2' && paper_sem='4'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester4:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>
           
			</ul> <!-- cd-faq-group -->

		<ul id="account" >
			<li class="cd-faq-title"><h2>Third Year</h2></li><br>
			<?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2013-2014' && paper_address='mba' && fk_student_year='3' && paper_sem='5'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo ' <li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester5:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2013-2014' && paper_address='mba' && fk_student_year='3' && paper_sem='6'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester6:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2014-2015' && paper_address='mba' && fk_student_year='3' && paper_sem='5'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester5:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2014-2015' && paper_address='mba' && fk_student_year='3' && paper_sem='6'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester6:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2015-2016' && paper_address='mba' && fk_student_year='3' && paper_sem='5'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester5:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2015-2016' && paper_address='mba' && fk_student_year='3' && paper_sem='6'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester6:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		     <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2016-2017' && paper_address='mba' && fk_student_year='3' && paper_sem='5'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester5:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2016-2017' && paper_address='mba' && fk_student_year='3' && paper_sem='6'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester6:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>
           
		</ul> <!-- cd-faq-group -->

		<ul id="payments">
			<li class="cd-faq-title"><h2>Fourth Year</h2></li><br>
			<?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2013-2014' && paper_address='mba' && fk_student_year='4' && paper_sem='7'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo ' <li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester7:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2013-2014' && paper_address='mba' && fk_student_year='4' && paper_sem='8'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester8:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2014-2015' && paper_address='mba' && fk_student_year='4' && paper_sem='7'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester7:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2014-2015' && paper_address='mba' && fk_student_year='4' && paper_sem='8'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester8:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2015-2016' && paper_address='mba' && fk_student_year='4' && paper_sem='7'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester7:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2015-2016' && paper_address='mba' && fk_student_year='4' && paper_sem='8'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester8:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		     <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2016-2017' && paper_address='mba' && fk_student_year='4' && paper_sem='7'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester7:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2016-2017' && paper_address='mba' && fk_student_year='4' && paper_sem='8'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester8:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>
           
			  	</ul> <!-- cd-faq-group -->

		<ul id="privacy">
			<li class="cd-faq-title"><h2>Fifth Year</h2></li><br>
			<?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2013-2014' && paper_address='mba' && fk_student_year='5' && paper_sem='9'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo ' <li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester9:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2013-2014' && paper_address='mba' && fk_student_year='5' && paper_sem='10'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester10:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

			  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2014-2015' && paper_address='mba' && fk_student_year='5' && paper_sem='9'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester9:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2014-2015' && paper_address='mba' && fk_student_year='5' && paper_sem='10'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester10:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		  <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2015-2016' && paper_address='mba' && fk_student_year='5' && paper_sem='9'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester9:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2015-2016' && paper_address='mba' && fk_student_year='5' && paper_sem='10'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester10:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

       echo '	</div> <!-- cd-faq-content -->';
			
 
        }
      
         ?>
           </li>

		     <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2016-2017' && paper_address='mba' && fk_student_year='5' && paper_sem='9'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
          echo '<li class="product-sec1">';
        
            echo '        <a  class="cd-faq-trigger" >'.$row['paper_year'].'</a>';
    
            
				echo'<div class="cd-faq-content">
					<center><h1><font size="5px">Semester9:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';
         } 
         ?>
          <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from paper_tbl where paper_year='2016-2017' && paper_address='mba' && fk_student_year='5' && paper_sem='10'";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         { 
            echo	'<br><center><h1><font size="5px">Semester10:<a href="'.$row['paper_url_mid'].'">Midsem</a>|<a href="'.$row['paper_url_final'].'">Final</a></h1>';

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