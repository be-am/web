<?php
include_once "db.php";
include_once "apis/query.php";
    
$postID = $_SESSION['userID'];
$title = $_POST['title'];
$content = $_POST['content'];

$table = 'post(`postID`,`title`,`content`)';
$value = "'$postID'".","."'$title'".","."'$content'";

$sql = insult($table,$value);
$result = mq($sql);
        
if($result){
    echo "게시물이 게시 되었습니다.";
}
else{
    echo 'fail';
}
echo '<a href="index.php">돌아가기</a>';


?>