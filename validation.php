<?php
include_once "db.php";

function validate($id){
    if($id != $_SESSION['userID']){
        header("Location: index.php");
    }    

    return;       
    }
?>
