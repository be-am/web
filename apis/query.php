<?php
include_once "db.php";

function delete($table,$value){
    $sql = "DELETE FROM ".$table." WHERE id="."'$value'";
    return $sql;
}

function update($table,$value,$field,$id){
    $sql = "UPDATE ".$table." SET ".$value." WHERE ".$field."=".$id;
    return $sql;
}

function selectId($table,$field,$value){
    $sql = "SELECT * from ".$table." WHERE ".$field."="."'$value'";
    return $sql;
}

function select($table){
    $sql = "SELECT * from ".$table;
    return $sql;
}

function insult($table,$value){
    $sql = "INSERT INTO ".$table." VALUES(".$value.")";
    return $sql;
}

?>