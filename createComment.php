<?php
include_once "loginCheck.php";
include_once "apis/query.php";

$id = $_GET['id'];
$commentID = $_SESSION['userID'];
$comment = $_POST['comment'];

$table = 'comment(`postID`,`commentID`,`comment`)';
$value = "'$id'".","."'$commentID'".","."'$comment'";

$sql = insult($table,$value);
echo $sql;
$result = mq($sql);

if($result){
    echo "댓글이 등록되었습니다.";
}
else{
    echo "실패하였습니다";
}
    
echo "<a href=post_in.php?id=$id>돌아가기</a>"
?>