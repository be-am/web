<?php

    session_start();
    $con =mysqli_connect('localhost','bin','1234','blog');


    $postID=$_SESSION['userID'];
    $title=$_POST['title'];
    $content=$_POST['content'];


    $sql="INSERT INTO post(`postID`,`title`,`content`) VALUES('$postID', '$title', '$content')";

    $result=mysqli_query($con,$sql);
    



    if($result){
        echo "게시물이 게시 되었습니다.";
    }
    else{
        echo 'fail';
    }
    echo '<a href="index.php">돌아가기</a>';


?>