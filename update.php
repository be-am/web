<?php
    include_once "loginCheck.php";
    include_once "validation.php";
    include_once "url_create.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM post where id=$id";
	$result = mq($sql);

    $row = mysqli_fetch_array($result);		 
    validate($row['postID']);

    $url_query=createUrlQuery("update_ok.php",array('id',$id));

?>

<!DOCTYPE html>
<html >
<head></head>
<body>
    <form action="<?=$url_query?>" method="post">
        <p><input type="text" name="title" placeholder="제목을 입력해 주세요" value="<?= $row['title']?>"/></p>
        <p><input type="textarea" name="content" value="<?= $row['content']?>"/></p>
        <p><input type="submit"/></p>
    </form>
</body>
</html>