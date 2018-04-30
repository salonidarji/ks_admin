<?php
session_start();

if(isset($_POST["submit"])){
    $flag=0;
    require '../shared/attendance_db.php';
 
    foreach($_POST["status"] as $id=>$status){
        $a_id=$_POST["txtaid"][$id];
        $rno=$_POST["txtrno"][$id];
        echo 'rno='.$_POST["txtrno"][$id];
        $year=$_SESSION["year"];
        $date=date("Y-m-d H:i:s");
        $email=$_SESSION["eid"];
        $flag=0;
       
        
        $obj=new attendance_db();
        $res=$obj->updateAttendance($a_id,$rno,$date,$year,$email,$status);
        echo "res=".$res;
        if($res){
            $flag=1;
        }
        else{
            $flag=0;
            echo "error";
           
        }
    }
    if($flag==1){
        header('location: starter.php');
    }
}

?>