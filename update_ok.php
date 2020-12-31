<?php
include_once "loginCheck.php";
$postID = $_SESSION['userID'];

$title = $_POST['title'];
$id = $_GET['id'];
$content = $_POST['content'];

$sql = "UPDATE `post` SET title='$title', content='$content' where id=$id";

$result = mq($sql);

if($result){
    echo "게시물이 수정 되었습니다.";
}
else{
    echo 'fail';
}
echo '<a href="index.php">돌아가기</a>';


?>