<?php
    $id=$_GET['id'];

    $con=mysqli_connect('localhost','bin','1234','blog');    
    $sql="DELETE FROM `post` WHERE id=$id";

    $result =mysqli_query($con,$sql);
    
    if($result){
        echo "삭제 되었습니다.";
    }
    else{
        echo "false";
    }
    echo "<a href=index.php>첫 화면으로 돌아가기</a>";


?>