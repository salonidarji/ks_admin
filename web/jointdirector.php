<?php require 'top.php'; ?>
  <h3 class="tittle-w3l">Message From Joint Director
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=8";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
             echo '<table class="table">';
             echo '<tr><td><img src="'.$row["gallary_url"].'"></td>';
             
              echo '<td colspan="2"></td>';
             echo '<td>';
             

         }
         ?>
        "An investment in knowledge pays the best interest" - Benjamin Franklin.
        
        Investment in education is the best gift parents can ever make for the future of their children, which in turn leads to betterment of the society at large and the nation as a whole.
        
        We at KSSBM welcome students from varied socio- demographic backgrounds with different aptitude and attitude. Having grown with technology and internet, they are techno-savvy and come with different values. At KSSBM, our endeavor is to inculcate professionalism, values, ethical practices and societal concern. We strive to facilitate learning and grooming in all facets of life. Students are encouraged to follow their creative instincts. We constantly kindle their innovative spirit to come out with products and solutions addressing the common needs of the society.
        
        Five long years of association with the institute creates a feeling of family. Often alumni visit the campus to dwell in the nostalgic moments and contribute to their alma mater.
        
        We welcome you to be part of the KSSBM family.
        
        <br>- Dr. Radha Ravichandran
        <br>Joint Director,
        <br>K. S. School of Business Management.
         
         
         </td></tr></table>
		 <?php require 'bottom.php'; ?>