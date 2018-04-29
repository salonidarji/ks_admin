<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />            
            <?php
              
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  session_start();
$id=$_POST["txtid"];
$passwd=$_POST["txtpass"];
 
require '../shared/login_db.php';
$obj=new login_db();
$res=$obj->logUser($id,$passwd);


     
if($res->num_rows==1)
{
  $row=$res->fetch_assoc();
  $_SESSION["eid"]=$row["pk_login_email_id"];
  $_SESSION["login_type"]=$row["login_type"];
  if($row["login_type"]==1)
  {
    
   header('location:../admin/starter.php');
   
  }
  else if($row["login_type"]==2)
  {
   header('location:../admin/starter.php');
  }
  else
  {
    $res_flag=$obj->updateFlag($id,1);
    $_SESSION["login_flag"]='1';
    header('location:index.php');

  }
        
}
else
{
  session_abort();
  include_once 'top.php';
  echo '<br><br>
  <div class="product-sec1 container-fluid">
  <div align="center"  class="container jumbotron alert alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Not Authorised User !!!<br>May be User Name or Password is Wrong</h2>
	<br><button class="btn btn-default btn-lg"><a href="index.php">Back</a></button>
  </div>
  </div>';
 // echo "select * from login_tbl where pk_login_email_id='".$id."' and login_passwd='".$passwd."'";
 
}
}
?>