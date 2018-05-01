<?php require 'top.php'; ?>
<h3 class="tittle-w3l">MSc(CA&IT)
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=10";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
             echo '<table class="table">';
             echo '<tr><td><img src="'.$row["gallary_url"].'" height="350px" width="500px"></td>';
             
              echo '<td colspan="2"></td>';
           
             echo '<td>';
             

         }
        
         ?>
         
       <font size="5px" color="black"> Under the five year integrated programme, on successful completion of three years ,students are awarded BSc degree and on completion of fifth year MSc degree.
         
         In the first three years the focus is on teaching fundamentals in communication, mathematics etc. BSC course covers basic programming languages, web designing, basic data base and networking. The pedagogy used is core class room teaching supported with real business world examples and practical laboratory sessions.
         
         MSC syllabus includes advanced level networking, software project management etc.The pedagogy at this level is dissertation, live projects in addition to class room teaching and laboratory sessions.
          <br> <a href="../resources/material/msccourse.pdf">For more details..</a>
         </td></tr>
         <tr><td><font size="5px">The earliest general - purpose computers<br>
February 15, 1946</td></tr></table></font>
       
<?php require 'bottom.php'; ?>