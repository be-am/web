<?php

ini_set("error_reporting", E_ALL);
$con = mysqli_connect('localhost', 'bin', '1234', 'blog');



$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];
$userName = $_POST['userName'];



$query = "INSERT INTO USER_INFO(userID, userPassword, userName) 
    VALUES(
    '$userID',
    '$userPassword',
    '$userName'
    )";

$stmt = mysqli_query($con,$query);


if($stmt=== true) {
	header("Location: index.php");
} else {
    echo "fail to register";
}
