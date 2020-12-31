<?php
include_once "db.php";

$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];
    

$query = "select * from USER_INFO WHERE userID='$userID' and userPassword='$userPassword'";

$stmt = mq($query);


if($stmt){
    $_SESSION['userID']=$userID;
    $_SESSION['isLogged']= 1;
    header("Location: index.php");
}
else{
    echo "login fail";
    echo '<a href="index.php">돌아가기</a>';
}

?>