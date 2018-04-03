<?php require 'top.php'; ?>

    <h3 class="tittle-w3l">MBA
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=9";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
             echo '<table class="table">';
             echo '<tr><td><img src="'.$row["gallary_url"].'" height="400px" width="500px"></td>';
             
              echo '<td colspan="2"></td>';
           
             echo '<td>';
             

         }
        
         ?>
         
       <font size="5px" color="black"> Under the five year integrated programme, on successful completion of three years, students are awarded BBA degree and on completion of fifth year MBA degree.
        
        In the first three years the focus is on teaching fundamentals in communication, mathematics etc.BBA course covers basics of management and related subjects like economics, accounting etc.The pedagogy used is core class room teaching supported with real business world examples.
        
        In the fourth and fifth years of MBA, the emphasis is on core and functional aspects of management, decision making, practical internship in companies, live projects etc . The pedagogy at this level is case study, discussion, presentations etc.</font>
        <br> <a href="../resources/material/mbacourse.pdf"><font size="5px">For more details..</font></a>
         </td></tr>
         <tr><td><font size="5px">Indias First MBA College, Kolkata, Estd 1953</font></td></tr></table>
		 <?php require 'bottom.php'; ?>