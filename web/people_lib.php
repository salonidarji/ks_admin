<?php require 'top.php'; ?>
    <h3 class="tittle-w3l">LIBRARY
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=4";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
             echo '<table class="table">';
             echo '<tr><td><img src="'.$row["gallary_url"].'"></td>';
             
              echo '<td colspan="2"></td>';
             echo '<td>';
             

         }
         ?>
         
         <br>
         Ms. Indira Dodiya She is M.Phil in Library and Information Service with gold medal. She has cleared UGC-NET in JUNE-2012. She is pursuing Ph.D. She has over 45 research publications to her credit and has attended more than 40 National and International Conferences/ Seminars/ Workshops etc. Her publication list includes more than 6 research articles in peer reviewed Journals. Her research interests are Digital Libraries, Institutional Repositories, RFID, Metadata, Library Automation and Networking, E-learning, Knowledge Management etc.

<br>E-mail : indiradodia@gujaratuniversity.ac.in

         
		 </td></tr></table>
		 <?php require 'bottom.php'; ?>