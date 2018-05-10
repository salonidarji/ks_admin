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
		 echo'
		
		 <table class="table"  > <tr >';
         while($row=$result->fetch_assoc())
         {
             echo '<td height="30%" width="30%"	>';
            

	if($type==1)
	{
	echo '
	
	<img  class="img img-thumbnail img-responsive" src="'.$row["url"].'" height="100%" width="100%" >';
	}
	else if($type==2){
	echo '<div class="embed-responsive embed-responsive-4by3">
	<iframe  class="embed-responsive-item" src="' . $row["url"] . '"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>';
	
	}
								
							
							
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