<?php require 'top.php'; ?>
    <h3 class="tittle-w3l">LIBRARY RULES
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <div class="product-sec1">
            <div class="row">
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=6";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
            
             echo '<div class="col-md-5">
             <img class="img-responsive" src="'.$row["gallary_url"].'" height="350px" width="500px"></div>';
             

         }
         ?>
         
         <div class="col-md-7">
        
<font size="4px" color="black">1.)	  While entering the library students should leave their personal belongings such as bags, Personal books, parcels, brief cases and bags near the rack reserved for this purpose. However they can carry newspapers and notebooks
<br><br>2.)  	Students must sign in the Register at the entrance showing their KSSBM identity card.
<br><br>3.)   	For study, a peaceful atmosphere is inevitable in the library.
<br><br>4.)	    Students should not deface, mark, cut, mutilate or damage material. (if anyone is found doing so, he/she will be charged the full replacement cost of the material.).
<br><br><br>5.)	    After using the books or the other material taken from the stacks, they should be left on the tables reserved for this purpose
<br><br>6.)  	Student leaving the library should allow the Library staff to examine their personal belongings.
<br><br>7.)  	Student should maintain peace in the library and should not disturb other users in any way.
<br><br>8.)  	Mobile Phone is strictly prohibited.</font>

         
		</div>
		</div>
		</div>
		 <?php require 'bottom.php'; ?>