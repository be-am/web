<?php
include_once "db.php";
include_once "loginCheck.php";
include_once "apis/query.php";


$postID = $_SESSION['userID'];

$title = $_POST['title'];
$id = $_GET['id'];
$content = $_POST['content'];

$value = 'title='."'$title'".', content='."'$content'";
$sql = update('post',$value,'id',$id);

$result = mq($sql);

if($result){
    echo "게시물이 수정 되었습니다.";
}
else{
    echo 'fail';
}
echo '<a href="index.php">돌아가기</a>';


?>