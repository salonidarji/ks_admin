
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Project</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<script type="text/javascript">
	var searchPic;
    function doOnClick() {
        document.getElementById('linkid').click();
        //Should alert('/testlocation');
		
		
	
		//document.getElementById("pic1").src = searchPic;
	}
	function setImage(){
		searchPic=document.getElementById("linkid").value;
		 searchPic= searchPic.substring(searchPic.lastIndexOf('/')+ 1,strlen(searchPic)+1);
		 alert( searchPic);
		$("#pic1").attr("src", searchPic);
	}
</script>
</head>

<body>
	<!-- top-header -->
	<div class="header-most-top">
	<?php
		$_address="Marquee";
		require '../shared/notice_db.php';
		$obj_notice=new notice_db();
		$result_notice=$obj_notice->getNotice($_address);
		
		
         while($row=$result_notice->fetch_assoc())
         {
            echo '<p><marquee>'.$row["notice_desc"].'</marquee></p>';
		 }
		?>
		
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4  img-responsive">
				<h1>
					<a href="index.php">
						<img src="kslogo.jpg" align="left" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<?php 
			$hide_1="";
			$hide_2="hidden";
			if(isset($_SESSION["eid"]))
		 	{
				 require '../shared/login_db.php';
				 $obj=new login_db();
				 $res=$obj->getLogin($_SESSION["eid"]);
				 $row=$res->fetch_assoc();
				 if($row["flag"]==1)
				 {
				$hide_2="";
				$hide_1="hidden";
				 }
			}


			echo '
			<div class="col-md-8 header">
			<h2>K.S School of Business Management</h2>
			
					
				<ul align="right">
					
						
					 <div '. $hide_1 .' >
					 	<li><a href="" ><span></span>  </a></li>
					 <li>
					 <a href="#" data-toggle="modal" data-target="#myModal1">
					 
						 <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
				 </li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
					</li>
					</div>
					<div '. $hide_2 .' align="right" >
					<li>
						<a><span ></span> </a>
					</li>	
					<li>
						<a href="logout.php">
							<span class="fa fa-lock" aria-hidden="true"></span> Sign Out </a>
					</li>
					
					</div>
				</ul>
				<!-- //cart details -->
				
			</div>
			'; ?>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<form action="login.php" method="post">
							
                         
	<div class="styled-input agile-styled-input-top">
	
								<input type="text" placeholder="User Name" name="txtid" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="txtpass" required="">
							</div>
							
							<input type="submit" value="Sign In">
		
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<form action="signup.php" method="post" enctype="multipart/form-data">
						<div class="styled-input" align="center">
							<img src="images/avatar.jpg" id="pic1" height="100px" width="100px" class="img img-circle">
								<br><br><button class="btn btn-primary" onclick="doOnClick()">Upload profile</button>
								<div hidden> 
								<input type="file" name="txtimg"  id="linkid" onchange="setImage()"></div> 		
							</div> 
							
							
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="txtname" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="txtid" required="">
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Enrollment Number" required name="txtenrol">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="txtpass" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
							</div>
						
							<input type="submit" value="Sign Up">
						</form>
						</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="">
									<a class="nav-stylehead" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="dropdown">	
								<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">About
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li>
										<a href="aboutus.php">About Us</a>
									</li>
									<li>
										<a href="director.php">Director</a>
									</li>
									<li>
										<a href="jointdirector.php">Joint Director</a>
									</li>
								</ul>
							</li>
							
								
			                 <li class="dropdown">
							<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Academic
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li>
									<a href="ac_mba.php">MBA</a>
								</li>
								<li>
									<a href="ac_msc.php">M.SC.(CA & IT)</a>
								</li>
								  <?php
									$_mAddress="academic";
								  require '../shared/material_db.php';
								  $obj_material=new material_db();
								  $result_academic=$obj_material->getMaterial($_mAddress);
         
         while($row=$result_academic->fetch_assoc())
         {
								echo'<li>
								<a href="'.$row["material_url"].'">ACADEMIC CALENDER</a>';
		 }
		 ?>
		 
			  <?php
			  $_mAddress="mba";
          $result_mba=$obj_material->getMaterial($_mAddress);
         while($row=$result_mba->fetch_assoc())
         {					
			 echo'<ol><li type="disc">
								<a href="'.$row["material_url"].'">MBA</a>
							
							</li></ol>';
		 }
		 ?>
		<?php
         
			  $_mAddress="msc";
			  $result_msc=$obj_material->getMaterial($_mAddress);
         while($row=$result_msc->fetch_assoc())
         {
								
							echo'<ol><li type="disc">
								<a href="'.$row["material_url"].'">M.SC.(CA & IT)</a>
							
							</li></ol>';
		 }
		 ?>
		<?php
         
			  $_mAddress="holidays";
			  $result_holidays=$obj_material->getMaterial($_mAddress);
         while($row=$result_holidays->fetch_assoc())
         {
				
							echo'<li>
								<a href="'.$row["material_url"].'">LIST OF HOLIDAYS</a>
							</li>';
		 }
		 ?>
							</ul>
						</li>
						<li class="dropdown">
							<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Faculty
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li>
									<a href="fac_mba.php">MBA</a>
								</li>
								<li>
									<a href="fac_msc.php">M.SC.(CA & IT)</a>
								</li>
							
							</ul>
						</li>
						<li class="dropdown">
							<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Library
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li>
									<a href="about_lib.php">ABOUT LIBRARY</a>
								</li>
								<li>
									<a href="people_lib.php">PEOPLE AT LIBRARY</a>
								</li>
								<li>
									<a href="lib_hours.php">LIBRARY HOURS</a>
								
								</li>
								<li>
									<a href="rules.php">RULES</a>
								</li>
							</ul>
						</li>
						 <?php
						 if(isset($_SESSION["login_flag"])){
						 if( $_SESSION["login_flag"]==1){
						 echo '
						<li class="dropdown">
							<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Student
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">
							
								<li>
							<a href="">Download Material</a>
						
						<ol><li type="disc">
						<a href="material-mba.php">MBA</a>
					
					</li>
					<li type="disc">
						<a href="material-msc.php">MSC</a>
					
					</li></ol>
					</li>
								<li>
									<a href="quiz.php">Online exam</a>
								
								</li>
								<li>
									<a href="result.php">Result</a>
								</li>
								<li>
									<a href="PayUMoney_form.php">Fees Payment</a>
								
								</li>
								
								
							</ul>
						</li>';
						 }
						 }
		 				?>
						<li class="dropdown">
							<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Placement
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li>
									<a href="mba.php">MBA</a>
								</li>
								<li>
									<a href="mscit.php">M.SC.(CA & IT)</a>
								</li>
								
							</ul>
						</li>
						
								
								<li class="">
									<a class="nav-stylehead" href="contact.php">Contact</a>
								</li>
								 
								 
								<li class="dropdown"  >
								
								<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown"><div <?php echo $hide_2; ?> >  Profile
									<b class="caret"></b> </div>
								</a>
								<ul class="dropdown-menu agile_short_dropdown">
								<li>
								<a href="profile.php">View Profile</a>
								</li>
								<li>
										<a href="change_passwd.php">Change Password</a>
									</li>
									
								</ul>
								
							    </li>
								 
							
								

							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->
