<?php require 'top.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div class="container">
<h3 class="tittle-w3l">Quiz Result
       
       <span class="heading-style">
           <i></i>
           <i></i>
           <i></i>
       </span>
       </h3>
	<div id="page-wrap" class="product-sec1">

		
		
        <?php
		if(isset($_POST['submit']))
		{
			$email_faculty=$_POST["email"];
            $cnn=mysqli_connect('localhost','root','','ks_admin_db');
			$sql="select * from qa_tbl where fk_email_id='".$email_faculty."' ";
			$res=$cnn->query($sql);
			$i=0;
			$totalCorrect = 0;
			$ans="";
			$skip=0;
			$n=mysqli_num_rows($res);
            while($row=$res->fetch_assoc())
         {

			 $i++;
			 if(isset($_POST['question-'.$i.'-answers'])){
            $answer = $_POST['question-'.$i.'-answers'];
		$ans=$row["ans"];
			 
           
		
            if ($answer == $ans) { $totalCorrect++; }
			 }
			 else{
				 $skip++;
			 }
			
			//echo "<br>ans".$i."=".$ans;
			//echo "<br>answer".$i."=".$answer;
			$answer="";
			$ans="";
            
            
		 }
		 }; 
		 $totalWrong=$n-$totalCorrect-$skip; 
		 echo "<div align='center'>
		 		<div id='results'><h3><span class='glyphicon glyphicon-ok'>   ".$totalCorrect."/".$n." (Correct)</h3></div>";
		 echo "<br><div id='results'><h3><span class='glyphicon glyphicon-remove'>   ".$totalWrong."/ ".$n."   (Wrong)</h3></div>";
		 echo "<br><div id='results'><h3><span class='glyphicon glyphicon-warning-sign'>   ".$skip."/ ".$n." (Skip) </h3></div> </div>"; 

		 $id="null";
		 $email=$_SESSION["eid"];
		 require '../shared/test_db.php';
		 $obj=new test_db();
		 $res=$obj->insertTest($id,$email,$totalCorrect,$totalWrong,$skip,$email_faculty);
		 if($res)
		 {
			echo '<br><br><div align="center" class="alert alert-success alert-block">
			<h3><span class="glyphicon glyphicon-ok-sign">  Exam Completed Successfully</span></h3></div>';
		 }
		 else{
			echo '<br><br><div align="center" class="alert alert-danger alert-block">
			<h3><span class="glyphicon glyphicon-remove-sign">  Exam NOT Completed Successfully</span></h3></div>';
		 
			//echo "<br>INSERT INTO test_tbl VALUES (". $id .",'" . $email. "'," . $totalCorrect . "," . $totalWrong . ",".$skip.") ";
		}
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>
</div>
</body>

</html>
<?php require 'bottom.php'; ?>
