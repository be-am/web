<?php
	$con =mysqli_connect('localhost','bin','1234','blog');
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<ol>
		<li><a href="register.php">회원가입</a></li>
		<li><a href="login_check.php">로그인</a></li>
		<li><a href="logout.php">로그아웃</a></li>
		</ol>
		<?php 
			session_start();
			if($_SESSION['isLogged']===1){
				echo $_SESSION['userID']."님 로그인 중입니다.";
			}
			else{
				echo "로그인을 해주세요";
			}
		?>
	</body>
</html>

