<?php
include_once "loginCheck.php";
include_once "directAccess.php";

$comment = $_POST['comment'];

$sql = "UPDATE comment SET comment='$comment' where id=$_GET[id]";

$result = mq($sql);
    

if($result){
    echo "댓글이 수정 되었습니다.";
}
else{
    echo 'fail';
}
   
echo "<a href=post_in.php?id=$_GET[postID]>돌아가기</a>";


?>