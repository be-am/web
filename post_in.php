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
            $id=$row['id'];
        }
        
    }
    
    
    echo "$login";
    echo "$list";

    
    if($_SESSION['isLogged']===1){
        echo '<p>'."<a href=update.php?id=$id>update</a>".'<p>';
        echo '<p>'."<a href=delete.php?id=$id>delete</a>".'<p>';
    }
    
    
    echo '<p>'."<a href=index.php>되돌아가기</a>".'<p>';


    

   

	
?>