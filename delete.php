<?php
    include_once "db.php"; 
    $id=$_GET['id'];
    $query="select * from post WHERE id='$id'";
    $postID=mq($query);
    $row=mysqli_fetch_array($postID);

    if($_SESSION['userID']===$row['postID']){
        $sql="DELETE FROM `post` WHERE id=$id";
    }

    $result =mq($sql);
    
    if($result){
        echo "삭제 되었습니다.";
    }
    else{
        echo "false";
    }
    echo "<a href=index.php>첫 화면으로 돌아가기</a>";

?>
