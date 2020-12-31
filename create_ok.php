<?php
include_once "db.php";
    
$postID = $_SESSION['userID'];
$title = $_POST['title'];
$content = $_POST['content'];


$sql = "INSERT INTO post(`postID`,`title`,`content`) VALUES('$postID', '$title', '$content')";
    
$result = mq($sql);
        
if($result){
    echo "게시물이 게시 되었습니다.";
}
else{
    echo 'fail';
}
echo '<a href="index.php">돌아가기</a>';


?>