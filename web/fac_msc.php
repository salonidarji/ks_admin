<?php require 'top.php'; ?>

	<!-- //navigation -->
	
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">MSC(CA & IT) FACULTY
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
     <?php
								
  $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from faculty_tbl where faculty_course='msc'";
         $result=$cnn->query($sql);
		 $fac_cnt=0;
		

	 echo '<div class="product-sec1" width="100%">';
   echo '<div class="col-md-4 product-men" width="100%">';
					   
		 echo'<table class="table table-responsive"> <tr>';
         while($row=$result->fetch_assoc())
         {
			 $id=$row['pk_faculty_id'];
			 echo '<form action="dispmscfaculty.php?id='.$id.'" method="post">';
             echo '<td>';
            	echo '<div class="men-pro-item simpleCart_shelfItem" width="100%">';
	echo '<div class="men-thumb-item" width="100%">';
	echo '<img src="'.$row["faculty_img"].'" height="300px" width="320px">';
									echo '<div class="men-cart-pro">';
										echo '<div class="inner-men-cart-pro">';
										echo '<input type="submit" value="Quick View" name="submit"  class="link-product-add-cart">';
											//echo '<a href="dispFaculty1.php" class="link-product-add-cart">Quick View</a>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
								echo '<div class="item-info-product " width="100%">';
									echo '<h3>';
										echo '<a href="dispmscfaculty.php?id='.$id.'">'.$row["faculty_name"].'</a>';
									echo '</h3>';
									echo '<h4>
									<br>
									Designation:<a href="dispmscfaculty.php?id='.$id.'">'.$row["faculty_desig"].'</a>
									<br>Course:<a href="dispmscfaculty.php?id='.$id.'">'.$row["faculty_course"].'</a>
									<br>Qualification:<a href="dispmscfaculty.php?id='.$id.'">'.$row["faculty_degree"].'</a>
									';
									 echo '</div>';
							echo '</div>';
							echo'</td>';	
         $fac_cnt++;
		 if($fac_cnt==3){
			 echo '</tr><tr>';
			 $fac_cnt=0;
		 }
		 echo '</form>';
		 }
       // echo '<br>';
      echo'</table>';
        	echo '</div>';
					    echo '<div class="clearfix" ></div>';
					echo '</div>';
					

      ?>
		<?php require 'bottom.php'; ?>