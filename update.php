<?php
    session_start();
	$con =mysqli_connect('localhost','bin','1234','blog');
    $id=$_GET['id'];
 
    $sql ="SELECT * FROM post where id=$id";
	$result = mysqli_query($con,$sql);
    $login='';

	if($_SESSION['isLogged']===1){
        $login= '<li>' .$_SESSION['userID']."님 로그인 중입니다.".'</li>';		 
    }	

    $row=mysqli_fetch_array($result);
	
?>

<!DOCTYPE html>
<html >
<head></head>
<body>
    <form action="update_ok.php?id=<?=$id?>" method="post">
        <p><input type="text" name="title" placeholder="제목을 입력해 주세요" value="<?= $row['title']?>"/></p>
        <p><input type="textarea" name="content" value="<?= $row['content']?>"/></p>
        <p><input type="submit"/></p>
    </form>
</body>
</html>