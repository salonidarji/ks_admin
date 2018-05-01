<?php require 'top.php'; ?>
<div class="container">
    <br />
    <br />
    <br />

<h3 class="tittle-w3l">Frequently Asked Questions
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
  <?php
	require '../shared/faq_db.php';
	$obj_faq=new faq_db();
	$res=$obj_faq->getAllFaq();
	?>
  
<!-- Bootstrap FAQ - START -->

    <!--<div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        This section contains a wealth of information, related to <strong>PrepBootstrap</strong> and its store. If you cannot find an answer to your question, 
        make sure to contact us. 
    </div>-->

    <br />

    <div class="panel-group" id="accordion">
        <div class="faqHeader"><center>General questions</center></div>
        <?php
        if(mysqli_num_rows($res)>0){
    while($row=$res->fetch_assoc())
{
     echo'   <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
               <span class="glyphicons-question-sign"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#">'.$row['faq_ques'].'</a></span>
                </h4>
            </div>
            <div id="#" class="panel-collapse collapse in">
                <div class="panel-body">'.$row['faq_ans'].'
                     
                </div>
            </div>
        </div>';
}
        }
        ?>
      
</div>
<form action="insertfaquser.php" method="post">
<textarea rows="10" cols="100%" name="textques" placeholder="Ask your questions over here!!!"></textarea><br>
<input type="submit" name="submit" value="submit">
</form>
<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'glyphicons-question-sign';
        content: "\e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>

<!-- Bootstrap FAQ - END -->

</div>

<!--</body>
</html>-->
<?php require 'bottom.php'; ?>