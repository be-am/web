<?php
include_once "db.php";
include_once "url_create.php";

$id = $_GET['id'];
$sql = "SELECT * FROM post WHERE id='$id'";
$result = mq($sql);
$login='';
    
if($_SESSION['isLogged']===1){
    $login= '<li>' .$_SESSION['userID']."님 로그인 중입니다.".'</li>';		  
}	
else{
	$login = "비로그인 중..";
}
	
$list = '';
$list .= '<div>'."<span>ID</span>";
$list .= "<span>제목</span>";
$list .= "<span>내용</span>".'</div>';
    
$row = mysqli_fetch_array($result);

$list = $list."<div>{$row['postID']}</div>";
$list = $list."<div>{$row['title']}</div>";
$list = $list."<div>{$row['content']}</div>";
    
echo "$login";
echo "$list";

$comment = '';
$sql = "SELECT * FROM comment WHERE postID='$id'";
$query = mq($sql);

while($row = mysqli_fetch_array($query)){
    $arr=array("commentID",$row['commentID'],"id",$row['id'],"postID",$id);
    $updateCommentUrl=createUrlQuery("updateComment.php",$arr);
    $deleteCommentUrl=createUrlQuery("deleteComment.php",$arr);

    $comment .= "<div>";
    $comment .= "{$row['commentID']}";
    $comment .= "<br>";
    $comment .= "{$row['comment']}";

    $comment .= "<a href=$deleteCommentUrl>
    <div>삭제</div>
    </a>";
    $comment .="<a href=$updateCommentUrl>
    <div>수정</div>
    </a>";
    $comment .="</div>";
}

if($_SESSION['isLogged']===1){
    echo '<p>'."<a href=update.php?id=$id>게시글update</a>".'<p>';
    echo '<p>'."<a href=delete.php?id=$id>게시글delete</a>".'<p>';
}
echo '<div>'."<a href=index.php>되돌아가기</a>".'<div>';


$createCommentUrl=createUrlQuery('createComment.php',array("id","$id"));

?>

<html lang="en">
<head>
</head>
<body> 
    <form action="<?=$createCommentUrl?>" method="post">
        <div><input type="text" name="comment" placeholder="댓글 입력"/></div>
        <div><input type="submit"/></div>
    </form>

    <div>
        <div><?=$comment?></div>
    </div>
</body>
</html>
