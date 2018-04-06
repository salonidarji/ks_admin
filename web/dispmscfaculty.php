<?php require 'top.php'; ?>
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l"> Faculty Detail
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
            <?php
            
			$id=$_GET["id"];
            $cnn=new mysqli("localhost","root","","ks_admin_db");
		 $sql="select * from faculty_tbl where pk_faculty_id=".$id;
		// echo "select * from faculty_tbl where pk_faculty_id=".$id;
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
            
              

      echo '
      <div class="container">
      <div class="product-sec1">
			<div class="col-md-13 single-right-left simpleCart_shelfItem">
				<table class="table table-bordered" width="100%">
  
    <tr>
      <td rowspan="4"><center><img src="'.$row["faculty_img"].'" data-imagezoom="true" class="img-responsive" alt="" height="2000px" width="2500px"></center> </th>
      <td scope="col"><b>Name:</th>
      <td scope="col"><b>'.$row["faculty_name"].'</b></th>
    
    </tr>
    <tr>
      <th scope="row">Designation</th>
      <td><b>'.$row["faculty_desig"].'</b></td>
   
    </tr>
    <tr>
      <th scope="row">Department</th>
      <td><b>'.$row["faculty_course"].'</b></td>
     
    </tr>
    <tr>
      <th scope="row">Qualification</th>
      <td colspan="2"><b>'.$row["faculty_degree"].'</b></td>
   
    </tr>
		<tr>
      <th scope="row">Description:</th>
      <td colspan="2"><b>'.$row["faculty_description"].'</b></td>
   
    </tr>
  </tbody>
</table>
			<div class="clearfix"> </div>
		</div>
  </div>
  </div>
  </div>';
  }
            ?>
			

	<!-- //Single Page -->
	<!-- special offers -->
	<!-- //newsletter -->
	<!-- footer -->
	<?php require 'bottom.php'; ?>