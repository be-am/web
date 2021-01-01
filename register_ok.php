<?php
include_once "db.php";
include_once "apis/query.php";

$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];
$userName = $_POST['userName'];

$table = "USER_INFO(userID,userPassword,userName)";
$value = "'$userID'".","."'$userPassword'".","."'$userName'";
$query = insult($table,$value);

$stmt = mq($query);

if($stmt) {
    echo '가입에 성공하였습니다.' ;
} else {
    echo "fail to register";
    error_log(mysqli_error($con));
}

echo '<a href ="index.php">돌아가기</a>';
