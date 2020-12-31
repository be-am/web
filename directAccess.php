<?php
if(!preg_match("/"."post_in.php"."/i",$_SERVER['HTTP_REFERER'])){
    header("Location: index.php");
}
?>