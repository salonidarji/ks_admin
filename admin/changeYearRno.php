<?php
    require '../shared/student_db.php';
    $obj=new student_db();
    $res=$obj->getAllStudent();

    if($res){
        while($row=$res->fetch_assoc()){

            $rno=$row["pk_stu_rno"];
            $newRno=$rno + 1000;
            $year=$row["stu_year"];
            $newYear=$year + 1;
            $sem=$row["stu_semister"];
            $newSem=$sem + 1;
            $email=$row["fk_email_id"];

            
            $res_update=$obj->changeYear($newRno,$newYear,$newSem,$email);
            if($res_update){
                header('location: starter.php');
            }
            else{
                echo "error";
            }
        }
    }
?>