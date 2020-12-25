<?php
$con =mysqli_connect('localhost','bin','1234','blog');
session_start();

function mq($query){
    global $con;
    return mysqli_query($con,$query);
}
?>
