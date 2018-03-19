<?php require 'top.php'; ?>
	<!-- //navigation -->
	
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">MSC(CA&IT) FACULTY
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
     <?php
	  echo '<div class="product-sec1" width="100%">';
	echo '<div class="col-md-4 product-men" width="100%">';
													
  $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from faculty_tbl where faculty_course='msc'";
         $result=$cnn->query($sql);
		 $fac_cnt=0;
		 echo'<table class="table table-responsive"> <tr>';
         while($row=$result->fetch_assoc())
         {
             echo '<td>';
            	echo '<div class="men-pro-item simpleCart_shelfItem" width="100%">';
	echo '<div class="men-thumb-item" width="100%">';
	echo '<img src="'.$row["faculty_img"].'" height="450px" width="500px">';
									echo '<div class="men-cart-pro">';
										echo '<div class="inner-men-cart-pro">';
											echo '<a href="single.html" class="link-product-add-cart">Quick View</a>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
								echo '<div class="item-info-product " width="100%">';
									echo '<h4>';
										echo '<a href="single.html">'.$row["faculty_name"].'</a>';
									echo '</h4>';
									 echo '</div>';
							echo '</div>';
							echo'</td>';	
         $fac_cnt++;
		 if($fac_cnt==2){
			 echo '</tr><tr>';
			 $fac_cnt=0;
		 }
		 }
       // echo '<br>';
      echo'</table>';
        	echo '</div>';
					    echo '<div class="clearfix" ></div>';
					echo '</div>';

      ?>
		<?php require 'bottom.php'; ?>