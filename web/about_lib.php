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
         $sql="select * from gallary_tbl where gallary_type=3";
         $result=$cnn->query($sql);
         while($row=$result->fetch_assoc())
         {
             echo '<table class="table">';
             echo '<tr><td><img src="'.$row["gallary_url"].'" height="300px" width="500px"></td>';
             
              echo '<td colspan="2"></td>';
             echo '<td>';
             

         }
         ?>
       <font size="4px" color="black">  <b>Library At Glance</b>
         <br>
         K.S. School of Business Management is endowed with a library with rich collection of latest and most relevant books, journals, reference materials etc. Occupying a vast space in the third floor of the building, it provides calm and serene atmosphere for avid readers, studious students, focused faculty members.
         
         Digitalised data base of collection of books makes it easy to locate the items. KSSBM library houses more than 4255 resources which include books, bound volumes of journals, theses, students' project reports etc. The library collection covers all the subjects of Management and Information technology. More than 31 national & international periodicals are subscribed to keep the users updated with the trends in the field. KSSBM Library collect a variety of learning resources in different formats like print, electronic, digital.</font>
         
         
         
         </td></tr></table>
        <table class="table">
            <tr>
                <td>
                <div class="grid_3 grid_5 wthree">
				
				<div class="col-md-6 agileits-w3layouts">
					
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Print Resources</th>
                                <th>	M.B.A.</th>
                                <th rowspan="2">M.Sc. (CA & IT)</th>
								
                                  
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>Books(Titles)</code></td>
								<td>
									<span class="badge ">3015</span>
                                </td>
                                <td>
									<span class="badge ">1240</span>
                                </td>
                                
							</tr>
							<tr>
								<td>
									<code>Print Periodicals</code>
								</td>
								<td>
									<span class="badge badge-warning">25</span>
                                </td>
                                <td>
								&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge badge-warning">6</span>
                                </td>
                                
							</tr>
							<tr>
								<td>
									<code>News Papers</code>
								</td>
								<td colspan="2">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            	<span class="badge badge-danger">9</span>
								</td>
							</tr>
							
							
						</tbody>
					</table>
				</div>

                </td>

                <td>
<div class="grid_3 grid_5 wthree">
			
				<div class="col-md-6 agileits-w3layouts">
					
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>
Electronic Resources</th>
                                <th>	M.B.A.</th>
                                <th>M.Sc. (CA & IT)</th>
                                
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td>
									<code>CD/DVDs</code>
								</td>
								<td>
									<span class="badge badge-primary">	102 (with Books)</span>
								</td>
								
								<td>
									<span class="badge badge-primary">	113 (with Books)</span>
								</td>
							</tr>
							<tr>
								<td>
									<code>Project Report</code>
								</td>
								<td>
									<span class="badge badge-success">40</span>
								</td>
								<td>
									<span class="badge badge-success">25</span>
								</td>
								
							</tr>
							
						</tbody>
					</table>
				</div>

                </td>
        </tr>
        </table>

		<?php require 'bottom.php'; ?>