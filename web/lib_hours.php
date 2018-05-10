<?php require 'top.php'; ?>
    <h3 class="tittle-w3l">LIBRARY
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <div class="product-sec1">
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=5";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
            
             echo '<center>';
             echo '<img src="'.$row["gallary_url"].'">';
            echo '<br><font size="4px" color="black">Mon- Fri. 8.00 AM to 5.30 PM
            Sat	8.00AM to 4.00PM</font>';
             echo '</center>';
              
             

         }
         ?>
         </div>
		 <?php require 'bottom.php'; ?>