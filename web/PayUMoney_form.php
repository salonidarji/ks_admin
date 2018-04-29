

<?php
session_start();
$MERCHANT_KEY = "EVTHjTnn";
$SALT = "gBCdrXAnGt";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>

<html>
  <head>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()" class="container">
  <?php
  require '../shared/login_db.php';
  $obj=new login_db();
  $res=$obj->getLogin($_SESSION["eid"]);
  $row=$res->fetch_assoc();
  ?>
  <div class="col-md-4  img-responsive">
				<h1>
					<a href="index.php">
						<img src="kslogo.jpg" align="left" alt=" ">
					</a>
				</h1>
      </div>
      <div class="col-md-8 header">
      <h2>K.S School of Business Management</h2>
  </div>
  <br><br><br>
    <h5>  </h5>
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table class="table table-responsive">
        <tr>
          <!-- <td><b>Mandatory Parameters</b></td> -->
        </tr>
        <tr>
          <td>Amount: </td>
          <td><input class="form-control" name="amount" readonly value="9000" /></td>
          <td>First Name: </td>
          <td><input class="form-control" name="firstname" id="firstname" readonly value="<?php echo $row['login_uname']; ?>" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input  class="form-control"  class="form-control" name="email" id="email" readonly value="<?php echo $row['pk_login_email_id']; ?>" /></td>
         <?php 
          require '../shared/student_db.php';
          $obj_stu=new student_db();
          $res_stu=$obj_stu->getStudentEmail($_SESSION["eid"]);
          $row_stu=$res_stu->fetch_assoc();
          $mobile=$row_stu["stu_mobile_no"];
         ?>
          <td>Phone: </td>
          <td><input  class="form-control" name="phone" readonly value="<?php echo $mobile; ?>" /></td>
        </tr>
        
        <tr>
          <td>Purpose </td>
          <td colspan="3"><textarea  class="form-control" readonly name="productinfo"><?php echo 'Fees Payment'; ?></textarea></td>
        </tr>
      
        <tr hidden>
          <td>Success URI: </td>
          <td colspan="3"><input name="surl" value="http://localhost/ks_admin/web/success.php" size="64" /></td>
        </tr>
        <tr hidden>
          <td>Failure URI: </td>
          <td colspan="3"><input name="furl" value="http://localhost/ks_admin/web/failure.php" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>
<!--
        <tr>
          <td><b>Optional Parameters</b></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input name="lastname" id="lastname" value="<?php // echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" /></td>
          <td>Cancel URI: </td>
          <td><input name="curl" value="" /></td>
        </tr>
        <tr>
          <td>Address1: </td>
          <td><input name="address1" value="<?php // echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /></td>
          <td>Address2: </td>
          <td><input name="address2" value="<?php  // echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /></td>
        </tr>
        <tr>
          <td>City: </td>
          <td><input name="city" value="<?php //  echo (empty($posted['city'])) ? '' : $posted['city']; ?>" /></td>
          <td>State: </td>
          <td><input name="state" value="<?php //  echo (empty($posted['state'])) ? '' : $posted['state']; ?>" /></td>
        </tr>
        <tr>
          <td>Country: </td>
          <td><input name="country" value="<?php //  echo (empty($posted['country'])) ? '' : $posted['country']; ?>" /></td>
          <td>Zipcode: </td>
          <td><input name="zipcode" value="<?php //  echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF1: </td>
          <td><input name="udf1" value="<?php //  echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" /></td>
          <td>UDF2: </td>
          <td><input name="udf2" value="<?php //  echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF3: </td>
          <td><input name="udf3" value="<?php //  echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" /></td>
          <td>UDF4: </td>
          <td><input name="udf4" value="<?php //  echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF5: </td>
          <td><input name="udf5" value="<?php  // echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" /></td>
          <td>PG: </td>
          <td><input name="pg" value="<?php  // echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" /></td>
        </tr>
        -->
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="2" align="center"><button  class="btn btn-default btn-block"><a href="index.php"  />Back</a></button></td>
            <td colspan="2" align="center"><input  class="btn btn-primary btn-block" type="submit" value="Pay Now" /></td>
          <?php } ?>
        </tr>
      </table>
    </form>
  </body>
</html>