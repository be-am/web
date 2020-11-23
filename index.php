<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<a href="register.php">회원가입</a>
		<a href="login.php">로그인</a>

		<?php 
			session_start();
			if($_SESSION['isLogged']){
				echo $_SESSION['userID']."님, 환영합니다";
			}
			else{
				echo "로그인을 해주세요";
			}
		?>
	</body>
</html>

