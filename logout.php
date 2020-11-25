
<?php
    session_start();
    if($_SESSION['isLogged']===1){
        unset( $_SESSION['userID'] );
        unset( $_SESSION['isLogged'] );
        echo "로그 아웃 되었습니다.";
    }
    else{
        echo "이미 로그아웃 상태입니다..";
    }

?>

<!DOCTYPE html>
<html >
<head></head>
<body>
    <form action="index.php" method="post" >
        <button type="submit">로그인 화면으로 돌아가기</button>
    </form>
</body>
</html>