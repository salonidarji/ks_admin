<?php require 'top.php'; ?>

	<!-- //navigation -->
	
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">GALLERY
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			
			<table class="table"><tr><td>
			<div align="center" class="product-sec1" ><h4><a href="gallary.php?type=1"> Show Images </a></h4></div></td><td>
			<div align="center" class="product-sec1"> <h4><a href="gallary.php?type=2">Show Videos </a> </h4></div></td></tr>
			</table>
     <?php
	$type=1;
	  echo '<div class="product-sec1" width="100%">';
	echo '<div class="col-md-4 product-men" width="100%">';
	if(isset($_GET["type"]))
	{
		$type=$_GET["type"];

	}	
	if($type==1){										
  $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from album_tbl";
		 $result=$cnn->query($sql);
	}
	else if($type==2){
		$cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from video_tbl";
		 $result=$cnn->query($sql);
	}
		 $fac_cnt=0;
		 echo'<table class="table table-responsive"> <tr>';
         while($row=$result->fetch_assoc())
         {
             echo '<td>';
            	echo '<div class="men-pro-item simpleCart_shelfItem" width="100%">';
	echo '<div class="men-thumb-item" width="100%">';
	if($type==1)
	{
	echo '<img src="'.$row["url"].'" height="300px" width="320px">';
	}
	else if($type==2){
	echo '<iframe  src="' . $row["url"] . '" height="300px" width="320px" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
	
	}
									echo '<div class="men-cart-pro">';
										echo '<div class="inner-men-cart-pro">';
											//echo '<a href="single.html" class="link-product-add-cart">Quick View</a>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
								echo '<div class="item-info-product " width="100%">';
									echo '<h4>';
									//	echo '<a href="single.html">'.$row["faculty_name"].'</a>';
									echo '</h4>';
									 echo '</div>';
							echo '</div>';
							echo'</td>';	
         $fac_cnt++;
		 if($fac_cnt==3){
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