<?php
include_once "db.php";

function validate($id){
    if($id !== $_SESSION['userID']){
        echo $id;
    }    
    return;       
    }
?>
