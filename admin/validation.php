<?php
function validateName($Name){
    if(preg_match("/^([a-zA-Z' ]+)$/",$Name)){
        return true;
    }else{
        return false;
    }
    }

    function validateMobile($Mobile){
        if(strlen($Mobile)==10){
            return true;
        }else{
            return false;
        }
        }

        function validateRno($Rno){
            if(strlen($Rno)==7){
                return true;
            }else{
                return false;
            }
            }

            function validateEnrol($Enrol){
                if(strlen($Enrol)==12 ){
                    return true;
                }else{
                    return false;
                }
                }

        function validateEmail($Email){
            if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
               return true;
              } else {
               return false;
              }
            }
        
?>