<?php
    session_start();
    if($_SESSION['isLogged']){
        echo $_SESSION['userID']."에 로그인 중입니다";
        echo '<a href="index.php">돌아가기</a>';
    }
    else{
        header("Location: login.php");
    }

?>