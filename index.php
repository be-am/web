<?php
	session_start();
	$con =mysqli_connect('localhost','bin','1234','blog');
	$sql ="SELECT * FROM post";
	$result = mysqli_query($con,$sql);
	
	$login='';
	if($_SESSION['isLogged']===1){
		$login= '<li>' .$_SESSION['userID']."님 로그인 중입니다.".'</li>'.'<li><a href="create.php">게시물 올리기 </a></li>';		 
	}	
	else{
		$login= "로그인을 해주세요".'</br>';
	}
	
	$list='';
	while($row=mysqli_fetch_array($result)){

		$list=$list."<div>{$row['postID']}</div>";
		$list= $list."<div><a href=\"in_post.php?title={$row['title']}\">{$row['title']}</a></div>";
	}

	
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<h1>WEB CAFE</h1>

		<ol>
			<li><a href="register.php">회원가입</a></li>
			<li><a href="login.php">로그인</a></li>
			<li><a href="logout.php">로그아웃</a></li>
		</ol>

		<?=$login?>

		<div>
			<span>작성자</span>
			<span>TITLE</span>
		</div>

		<?=$list?>
		
		
	</body>
</html>

