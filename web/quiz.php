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

    <h3 class="tittle-w3l">Quick Quiz
       
       <span class="heading-style">
           <i></i>
           <i></i>
           <i></i>
       </span>
       </h3>
		
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
           
        echo '<div class="product-sec1">
                <li>
                
                    <h4>'.$row["que_desc"].'</h4>
                    
                    <div>
                         <input type="radio" name="question-'.$i.'-answers" id="question-1-answers-B" value="'.$row["op_1"].'" />
                        <label for="question-1-answers-A">A) '.$row["op_1"].' </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-'.$i.'-answers" id="question-1-answers-B" value="'.$row["op_2"].'" />
                        <label for="question-1-answers-B">B) '.$row["op_2"].'</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-'.$i.'-answers" id="question-1-answers-C" value="'.$row["op_3"].'" />
                        <label for="question-1-answers-C">C) '.$row["op_3"].'</label>
                    </div>
                    
                    <div>
                        <input type="radio"  name="question-'.$i.'-answers" id="question-1-answers-D" value="'.$row["op_4"].'" />
                        <label for="question-1-answers-D">D) '.$row["op_4"].'</label>
                    </div>
                
                </li>
                </div>
               ';
            
         }
   echo ' </ol>';
         
        ?>
        <center>
        <input type="submit" name="submit" value="Submit Quiz" class="btn btn-primary"/>
        </center>
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