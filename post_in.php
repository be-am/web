<?php
    
    include_once "db.php";

    $sql ="SELECT * FROM post";
	$result = mq($sql);
    
    $login='';
    $id=$_GET['id'];
    
    
	if($_SESSION['isLogged']===1){
        $login= '<li>' .$_SESSION['userID']."님 로그인 중입니다.".'</li>';		 
   
	}	
	else{
		$login= "비로그인 중..";
	}
	
    $list='';
    $list.='<div>'."<span>ID</span>";
    $list.="<span>제목</span>";
    $list.="<span>내용</span>".'</div>';
    
    while($row=mysqli_fetch_array($result)){
        if($row['id']===$id){
            $list=$list."<div>{$row['postID']}</div>";
		    $list= $list."<div>{$row['title']}</div>";
            $list= $list."<div>{$row['content']}</div>";
        }
    }
    
    
    echo "$login";
    echo "$list";

    $comment='';
    $sql="SELECT * FROM comment";
    $query=mq($sql);
    
    while($row=mysqli_fetch_array($query)){
        if($row['postID']==$id){
            $comment.="<div>";
            $comment.="{$row['commentID']}";
            $comment.="{$row['comment']}";
            $comment.='<form action="createComment.php?id=<?=$id?>" method="post">
            <div><input type="text" name="comment" placeholder="댓글 입력"/></div>
            <div><input type="submit"/></div>
            </form>';
            $comment.="</div>";
        }
    }

    
    $createC='';
    if($_SESSION['isLogged']===1){
        echo '<p>'."<a href=update.php?id=$id>게시글update</a>".'<p>';
        echo '<p>'."<a href=delete.php?id=$id>게시글delete</a>".'<p>';
      
    }
    


    echo '<div>'."<a href=index.php>되돌아가기</a>".'<div>';

?>

<html lang="en">
<head>
</head>
<body> 
    <form action="createComment.php?id=<?=$id?>" method="post">
        <div><input type="text" name="comment" placeholder="댓글 입력"/></div>
        <div><input type="submit"/></div>
    </form>

    <div>
        <div><?=$comment?></div>
    </div>
</body>
</html>
