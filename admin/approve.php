
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
	$_arr=implode("','",$_POST["chkdel"]);
	
require '../shared/login_db.php';
$obj=new login_db();
$res=$obj->updateApprove($_arr);
	
if($res)
{
    header("location:starter.php");
}
else{
    echo "not approved";
    echo "<br>UPDATE login_tbl SET login_approve='approved' where pk_login_email_id in ('$_arr') ";
}
	
}

?>
