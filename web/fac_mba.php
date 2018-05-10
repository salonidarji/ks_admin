<?php require 'top.php'; ?>

	<!-- //navigation -->
	
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">MBA FACULTY
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
	<?php
								
$cnn=new mysqli("localhost","root","","ks_admin_db");
		$sql="select * from faculty_tbl where faculty_course='MBA'";
		$result=$cnn->query($sql);
		$fac_cnt=0;
		

	echo '<div class="product-sec1" width="100%">';

					
	echo '<div class="row">';
		while($row=$result->fetch_assoc())
		{
			$id=$row['pk_faculty_id'];
			echo '<form action="dispmbafaculty.php?id='.$id.'" method="post">';
			
			echo '<div class="col-md-4 product-men" width="100%">';
				echo '<div class="men-pro-item simpleCart_shelfItem" width="100%">';
	echo '<div class="men-thumb-item" width="100%" >';
	echo '<img class="img-responsive" src="'.$row["faculty_img"].'" height="300px" width="320px">';
									echo '<div class="men-cart-pro">';
										echo '<div class="inner-men-cart-pro">';
										echo '<input type="submit" value="Quick View" name="submit"  class="link-product-add-cart">';
											//echo '<a href="dispFaculty1.php" class="link-product-add-cart">Quick View</a>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
								echo '<div class="item-info-product " width="100%">';
									echo '<h3>';
										echo '<a href="dispmbafaculty.php?id='.$id.'">'.$row["faculty_name"].'</a>';
									echo '</h3>';
									echo '<h4>
									<br>
									Designation:<a href="dispmbafaculty.php?id='.$id.'">'.$row["faculty_desig"].'</a>
									<br>Course:<a href="dispmbafaculty.php?id='.$id.'">'.$row["faculty_course"].'</a>
									<br>Qualification:<a href="dispmbafaculty.php?id='.$id.'">'.$row["faculty_degree"].'</a>
									</h4>';
									echo '</div>';
							echo '</div>';
						
								
		$fac_cnt++;
		if($fac_cnt==3){
			echo '</div><div class="row">';
			$fac_cnt=0;
		}
		
		echo '</form>';
		echo '</div>';
		}
	// echo '<br>';
	
		
						echo '<div class="clearfix" ></div>';
					echo '</div>';
					

	?>
		<?php require 'bottom.php'; ?>