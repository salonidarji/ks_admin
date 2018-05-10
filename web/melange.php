<?php require 'top.php'; ?>
  <h3 class="tittle-w3l">Melange
       
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <div class="product-sec1">
            <div class="row">
            <?php
         $cnn=new mysqli("localhost","root","","ks_admin_db");
         $sql="select * from gallary_tbl where gallary_type=12";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
             
             echo ' 
             <div class="col-md-5">
             <img class="img-responsive" src="'.$row["gallary_url"].'" height="350px" width="400px"></div>';
             
         }
         ?>
           
            <div class="col-md-7">
      <b><font size="3px" color="black"> The K.S.School of business management, one of the pioneer in integrated MBA program in India is a finest blend of education, cultural activities, sports etc. To mark the silver jubilee of K.S.S.B.M for the first time in the history of K.S, the cultural fest named "Mӗlange 2k17" was organized on 21st & 22nd March 2017. The event became a grand success with 23 participating colleges and 577 total no. of participants.

The German word Mӗlange defines itself as a blend of various activities. We, under the umbrella of melange bifurcated the blend of events into following three heads:

1)	Academics
2)	Performing Arts
3)	Fine Arts
The Seething minds got the platform to exhibit their intellectual capabilities under the academics event in the serene atmosphere of Gujarat University campus. Mӗlanges performing arts program further added a grandeur when the performers created a euphoria by their immensely skillful performances, be it singing, dancing, fashion show or band. It was a breath taking finesse and anenchanting for an eye to cherish upon the events under the category of fine arts exhibited the extraordinary talents and potentials of all the participants.

The entire event created a synergy and transformed the whole K.S. Campus into a grand occasion of celebration. The cultural fest Mӗlange 2k17 had a theme of Royal Heritage where the entire college was decorated will royal flavor. The student coordinators and volunteers were also espousing into the Royal theme attire.The events like Melange 2k17 always enhances the fever of the students towards. Managing the big events it imbibes in them the potential to work in team, learn the nuances of dealing with crisis and improvising their talent skills.
  </font>
  
  </div>
  </div>
  </div>
  <?php require 'bottom.php'; ?>