<?php require 'top.php'; ?>
    <h3 class="tittle-w3l">LIBRARY RULES
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=6";
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
        
1	While entering the library students should leave their personal belongings such as bags, Personal books, parcels, brief cases and bags near the rack reserved for this purpose. However they can carry newspapers and notebooks
<br>2	Students must sign in the Register at the entrance showing their KSSBM identity card.
<br>3	For study, a peaceful atmosphere is inevitable in the library.
<br>4	Students should not deface, mark, cut, mutilate or damage material. (if anyone is found doing so, he/she will be charged the full replacement cost of the material.).
<br>5	After using the books or the other material taken from the stacks, they should be left on the tables reserved for this purpose
<br>6	Student leaving the library should allow the Library staff to examine their personal belongings.
<br>7	Student should maintain peace in the library and should not disturb other users in any way.
<br>8	Mobile Phone is strictly prohibited.

         
		 </td></tr></table>
		 <?php require 'bottom.php'; ?>