<?php require 'top.php'; ?>
   <h3 class="tittle-w3l">From The Director's Desk
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=7";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
             echo '<table class="table">';
             echo '<tr><td><img src="'.$row["gallary_url"].'" height="400px" width="500px"></td>';
             
              echo '<td colspan="2"></td>';
             echo '<td>';
             

         }
         ?>
        <font size="4px" color="black"> K. S. School of Business Management is the culmination of the dream and vision of Philanthropist Dr. Biharibhai Kaniyalal, who was an old world textile magnet, one of the last of a breed and Dr. Narhari Parikh who shaped and made the dream of Biharibhai and nurtured an excellent institute in Gujarat University campus.
         
         They both conceptualized a five year integrated BBA-MBA programme for Gujarat State students who used to face a dearth of courses and colleges after 12th standard. K.S.S.B.M. was established with the aim of providing quality management education to the students of the state at an affordable cost.
         
         In the 1990´s KSSBM´s flagship programmes MBA and M.Sc. (C.A.&I.T.) were one of a kind far ahead of their time in whole of India.
         
         The institute remains first choice for the intelligent cream of commerce and science students for decades since its inception.
         
         We, the team of K.S.S.B.M., representing teaching faculty, administrative and support staff are ever ready and prepared to nurture our students in their quest for knowledge. Let us walk through the journey of excellence with quality education, continuous improvement and produce world class citizens from Gujarat - "the Karma Bhumi" of Gandhi and Sardar.
         
         <br>-Dr. Jayraj K. Pandya
         <br>Director,
         <br>K. S. School of Business Management.</font>
         
         
         </td></tr></table>
		 <?php require 'bottom.php'; ?>