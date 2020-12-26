<?php
    session_start();

    if($_SESSION['isLogged']){
        echo $_SESSION['userID']."에 로그인 중입니다";
        echo '<a href="index.php">돌아가기</a>';
    }
    else{
        echo '<form action="login_ok.php" method="post">
        아이디:<input type="text" name="userID"/>
        비밀번호:<input type="text" name="userPassword"/>
        <button type="submit">제출</button>
        </form>';
    }

    
?>





