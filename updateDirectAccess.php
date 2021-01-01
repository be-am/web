<?php
if(!preg_match("/"."updateComment.php"."/i",$_SERVER['HTTP_REFERER'])){
    header("Location: index.php");
}
?>