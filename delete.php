<?php
include_once "validation.php";
include_once "apis/query.php";

$id = $_GET['id'];
$table = 'post';

$query = selectId($table,'id',$id);
$postID = mq($query);

$row = mysqli_fetch_array($postID);
validate($row['postID']);

$sql = delete($table,$id);
$result = mq($sql);
    
if($result){
    echo "삭제 되었습니다.";
}
else{
    echo "false";
}
echo "<a href=index.php>첫 화면으로 돌아가기</a>";

?>
