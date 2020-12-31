<?php
session_start();
if($_SESSION['isLogged']===1){
    unset( $_SESSION['userID'] );
    unset( $_SESSION['isLogged'] );
    echo "로그 아웃 되었습니다.";
}
else{
   echo "<p>이미 로그아웃 상태입니다..</p>";
}

echo '<a href="index.php">로그인 화면으로 돌아가기</a>';

?>

