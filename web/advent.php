  <?php require 'top.php'; ?>
    <h3 class="tittle-w3l">Advent
        
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
          $sql="select * from gallary_tbl where gallary_type=11";
          $result=$cnn->query($sql);
          while($row=$result->fetch_assoc())
          {
              
              echo '
              <div class="col-md-5">
              <img class="img-responsive" src="'.$row["gallary_url"].'" height="100%" width="100%">';
              
              echo '</div>
              
              ';
              

          }
          ?>
          <div class="col-md-7">
        <b><font size="4px" color="black"> ADVENT is the signature management event of K.S. School of Business Management. The Event began its journey in the year 2000 focusing on intercollege advertisement and in its last 17 years has culminated into a state level, intercollege management festival. The various competitions in Advent encourage the student to explore and apply their intellectual ability, logic, and reasoning, enhances their decision making abilities.

  The event has competition like Business Organization, Business Plan, Elevators Pitch, Corporate Roadies, and The Hook up, the stock Market, IPL Auctions, Big Brand Theory, Recruitkar, and Game of Loans to encompass the various functional area of management and to build the entrepreneurial spirit of the student. 
          </font> </div></div>
          </div>
      <?php require 'bottom.php'; ?>