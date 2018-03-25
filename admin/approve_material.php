
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
	$_arr=implode(",",$_POST["chkdel"]);
	
require '../shared/material_db.php';
$obj=new material_db();
$res=$obj->updateApprove($_arr);
	
if($res)
{
    header("location:starter.php");
}
else{
    echo "not approved";
    echo "<br>UPDATE material_tbl SET material_approve='approved' where pk_material_id in ($_arr) ";
}
	
}

?>
