<?php
session_start();

if(isset($_POST["submit"])){
    $flag=0;
    require '../shared/attendance_db.php';
    foreach($_POST["status"] as $id=>$status){
        $a_id="null";
        $rno=$_POST["txtrno"][$id];
        $year=$_SESSION["year"];
        $date=date("Y-m-d H:i:s");
        $email=$_SESSION["eid"];
        $flag=0;
       
        $obj=new attendance_db();
        $res=$obj->insertAttendance($a_id,$rno,$date,$year,$email,$status);
        echo "res=".$res;
        if($res){
            $flag=1;
        }
        else{
            $flag=0;
            echo "error";
            echo "INSERT INTO attendance_tbl VALUES (".$a_id.",'".$rno."','".$date."',".$year.",'".$email."','".$status."')";
        }
    }
    if($flag==1){
        header('location: starter.php');
    }
}

?>