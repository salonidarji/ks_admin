<?php require 'top.php'; ?>
  <h3 class="tittle-w3l">TechnoMantra
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=13";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
             echo '<table class="table">';
             echo '<tr><td><img src="'.$row["gallary_url"].'"></td>';
             
              echo '<td colspan="2"></td>';
             echo '<td>';
             

         }
         ?>
        Technomantra is a technology – themed, spectacular Inter-College event organized by K.S.School of Business Management for Computer Science Students. The 10th edition of the event was celebrated in January 24th and 25th 2017. The event was a mix of Technology games, quiz, competitions in programming and designing and cultural events.

The event attracted participants from more than 30 colleges ,both graduate and post graduate colleges-from across Gujarat State. The main goal of this event is to kindle the creative minds of Computer Science students and bring out their knowledge⁄talent&fraslinnovative skills.

The tag line "Mantra to Infotainment" aptly explains the motive of the event – entertainment from and through information and technology. Ustad– E– Technomantra is the star event where winners from different events are then put through the rigour of another round of rapid fire questions by Prominent Panel members to select the Best performer of the event. </td></tr></table>
<?php require 'bottom.php'; ?>