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

		<center><h1>Quick Quiz</h1></center>
		
		<form action="grade.php" method="post" id="quiz">
		<?php
        $cnn=mysqli_connect('localhost','root','','ks_admin_db');
			$sql="select * from qa_tbl";
			$res=$cnn->query($sql);
          
            
                  $i=0;
                  echo'<ol>';
            while($row=$res->fetch_assoc())
         {
             $i++;
           
        echo '
                <li>
                
                    <h3>'.$row["que_desc"].'</h3>
                    
                    <div>
                         <input type="radio" name="question-'.$i.'-answers" id="question-1-answers-B" value="'.$row["op_1"].'" />
                        <label for="question-1-answers-A">A)'.$row["op_1"].' </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-'.$i.'-answers" id="question-1-answers-B" value="'.$row["op_2"].'" />
                        <label for="question-1-answers-B">B)'.$row["op_2"].'</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-'.$i.'-answers" id="question-1-answers-C" value="'.$row["op_3"].'" />
                        <label for="question-1-answers-C">C)'.$row["op_3"].'</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-'.$i.'-answers" id="question-1-answers-D" value="'.$row["op_4"].'" />
                        <label for="question-1-answers-D">D)'.$row["op_4"].'</label>
                    </div>
                
                </li>
                
               ';
            
         }
   echo ' </ol>';
         
        ?>
        <input type="submit" name="submit" value="Submit Quiz" />
		</form>
	
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