<?php require 'top.php'; ?>
<?php
if(!isset($_SESSION["eid"])){
echo '<h1><div align="center" class="alert alert-danger">
<span class="glyphicon glyphicon-warning-sign">  First Do Sign-In</span>
</div></h1>';
}
else{
?>
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
		<?php if(isset($_GET["email"])){
            
            ?>
		<form action="grade.php" method="post" id="quiz">
        <?php
        $email=$_GET["email"];
        $cnn=mysqli_connect('localhost','root','','ks_admin_db');
			$sql="select * from qa_tbl where fk_email_id='".$email."' ";
            $res=$cnn->query($sql);
            if(mysqli_num_rows($res)>0){
          
            
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
         
         echo '<input type="hidden" name="email" value="'.$email.'"> ';
   echo ' </ol>';
         
        ?>
        <center>
        <input type="submit" name="submit" value="Submit Quiz" class="btn btn-primary"/>
        </center>
        <?php }
                else{
                    echo '<br><br>
                <div class="product-sec1">
                <div align="center"  class=" jumbotron alert alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
                  <h2> Selected Faculty Have NOT Assigned Any Exam !!!<br></h2>
                  <br><button class="btn btn-default btn-lg"><a href="quiz.php">Back</a></button>
                </div>
                </div>';
                }
        ?>
		</form>
        <?php }
        else{
            require '../shared/student_db.php';
            $obj_stu=new student_db();
            $email_stu= $_SESSION["eid"];
            $res_stu=$obj_stu->getStudentEmail($email_stu);
            if($res){
                $row_stu=$res_stu->fetch_assoc();
                $course=$row_stu["fk_course_name"];
            }
            else{
                echo '<br><br>
                <div class="product-sec1">
                <div align="center"  class="jumbotron alert alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
                  <h2> Some Error occured !!!<br>Try Again Later</h2>
                  <br><button class="btn btn-default btn-lg"><a href="index.php">Back</a></button>
                </div>
                </div>';
            }
            ?>
            <div class="product-sec1">
             
                    <p>Select Which Professor Exam You Want to Give</p>
            
            <br>
            <?php
            require '../shared/faculty_db.php';
            $obj=new faculty_db();
            $res=$obj->getFacultyCourse($course);
            if($res){
                while($row=$res->fetch_assoc()){
                    echo '<a href="quiz.php?email='.$row["fk_email_id"].'"><div class="product-sec1" align="center"><h3>'.$row["faculty_name"].'</h3></div></a><br>';
                }
            }
            
            ?>
        
        </div>
            <?php
        } ?>
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
    <?php } require 'bottom.php'; ?>