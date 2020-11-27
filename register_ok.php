<?php

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
    echo '가입에 성공하였습니다.' ;
} else {
    echo "fail to register";
    error_log(mysqli_error($con));
}

echo '<a href ="index.php">돌아가기</a>';
