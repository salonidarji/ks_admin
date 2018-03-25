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
	<div id="page-wrap">

		<h1>Final Quiz for Lip building</h1>
		
        <?php
		if(isset($_POST['submit']))
		{
            $cnn=mysqli_connect('localhost','root','','ks_admin_db');
			$sql="select * from qa_tbl";
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
		 echo "<div id='results'>".$totalCorrect."/ ".$n." correct</div>";
		 echo "<div id='results'>".$totalWrong."/ ".$n." wrong</div>";
		 echo "<div id='results'>".$skip."/ ".$n." skip</div>"; 

		 $id="null";
		 $email=$_SESSION["eid"];
		 require '../shared/test_db.php';
		 $obj=new test_db();
		 $res=$obj->insertTest($id,$email,$totalCorrect,$totalWrong,$skip);
		 if($res)
		 {
			echo '<h5>Exam Completed Successfully</h5>';
		 }
		 else{
			echo '<h5>Exam Not Completed Successfully<br> please contact Authority for Query</h5>';
			echo "<br>INSERT INTO test_tbl VALUES (". $id .",'" . $email. "'," . $totalCorrect . "," . $totalWrong . ",".$skip.") ";
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
