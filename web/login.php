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
  echo '<div class="alert alert-warning">INVALID ID OR PASSWORD</div>';
  echo "select * from login_tbl where pk_login_email_id='".$id."' and login_passwd='".$passwd."'";
}
}
?>