<?php
session_start();
$id=$_SESSION["eid"];

require '../shared/login_db.php';
$obj=new login_db();
$res_flag=$obj->updateFlag($id,0);
if($res_flag)
{
    session_destroy();
    header('location:index.php');
}
else{
    echo 'error in query';
}
?>