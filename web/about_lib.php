<?php require 'top.php'; ?>
      <h3 class="tittle-w3l">LIBRARY
       
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
         $sql="select * from gallary_tbl where gallary_type=3";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
           
			 echo '<div class="col-md-5">
			 <img class="img-responsive" src="'.$row["gallary_url"].'" height="300px" width="500px">
			 </div>';
             
            
         }
         ?>
		 <div class="col-md-7">
       <font size="4px" color="black">  <b>Library At Glance</b>
         <br>
         K.S. School of Business Management is endowed with a library with rich collection of latest and most relevant books, journals, reference materials etc. Occupying a vast space in the third floor of the building, it provides calm and serene atmosphere for avid readers, studious students, focused faculty members.
         
         Digitalised data base of collection of books makes it easy to locate the items. KSSBM library houses more than 4255 resources which include books, bound volumes of journals, theses, students' project reports etc. The library collection covers all the subjects of Management and Information technology. More than 31 national & international periodicals are subscribed to keep the users updated with the trends in the field. KSSBM Library collect a variety of learning resources in different formats like print, electronic, digital.</font>
         
         
        </div>
		</div>
		<div class="row">
		<div class="col-md-2">
		</div>
		<?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sqlt="select * from gallary_tbl where gallary_type=14";
         $resultt=$cnn->query($sqlt);
         while($rowt=$resultt->fetch_assoc())
         {
		   echo '<div class="col-md-5">
			 <img class="img-responsive" src="'.$rowt["gallary_url"].'" height="300px" width="500px">
			 </div>';
             
            
         }
         ?>
		 </div>
		</div> 

         

		<?php require 'bottom.php'; ?>