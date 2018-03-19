<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $_id=$_POST["txtid"];
    $_img="../resources/login/".basename($_FILES["txtimg"]["name"]);
    $_name=$_POST["txtname"];
    $_passwd=$_POST["txtpass"];
    $_type=0;
     $_flag=1;
// $con=mysqli_connect('localhost','root','','ks_admin_db');
// $sql="INSERT INTO login_tbl values ( '". $_id ."','". $_name ."','". $_pass ."',".$_type.",".$_flag.")";
// $res=$con->query($sql);
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"] , $_img ))
{
require '../shared/login_db.php';
$obj=new login_db();
$res=$obj->signUp($_id,$_img,$_name,$_passwd,$_type,$_flag);

if ($res===true){
    
     $_SESSION["eid"]=$_id;
     $_SESSION["login_type"]=$_type;
    $res_flag=$obj->updateFlag($id,1);
    $_SESSION["login_flag"]='1';
     header('location:index.php');
}
else{
    echo "Please Enter Valid Data!!!";
    echo "<br>INSERT INTO login_tbl values('". $_id ."','". $_name ."','". $_passwd ."',".$_type.",".$_flag.")";
  }
}
else{
    echo 'error in move uploaded file';
}
}
?>