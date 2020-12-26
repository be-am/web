<?php
    include_once "loginCheck.php";

    $id=$_GET['id'];
    $commentID=$_SESSION['userID'];
    $comment=$_POST['comment'];


    $query="INSERT INTO comment (postID, commentID, comment) VALUES ('$id','$commentID','$comment')";
    $result=mq($query);

    if($result){
        echo "댓글이 등록되었습니다.";
    }
    else{
        echo "실패하였습니다";
    }
    
    echo "<a href=post_in.php?id=$id>돌아가기</a>"
?>