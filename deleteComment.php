<?php
    include_once "validation.php";
    
    $commentID=$_GET['commentID'];
    echo "$commentID";
    
    validate($commentID);

    
    $sql="DELETE FROM comment WHERE id=$_GET[id]";
    $result=mq($sql);

    if($result){
        echo "삭제되었습니다.";
    }

    echo "<a href=post_in.php?id=$_GET[postID]>뒤로가기</a>"
    
?>