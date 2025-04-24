<?php
function is_username($username){
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if(!preg_match($partten, $_POST['username'], $matchs)){
        return FALSE; 
    }else{
        return TRUE;
    }
}
function is_password($password){
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if(!preg_match($partten, $password, $matchs)){
        return FALSE;
    }else{
        return TRUE;
    }
}
?>