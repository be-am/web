<?php
	session_start();
	$con =mysqli_connect('localhost','bin','1234','blog');
	$sql ="SELECT * FROM post";
	$result = mysqli_query($con,$sql);
    $login='';
    $title=$_GET['title'];
    
    
	if($_SESSION['isLogged']===1){
        $login= '<li>' .$_SESSION['userID']."님 로그인 중입니다.".'</li>'.'<li><a href="create.php">게시물 올리기 </a></li>';		 
   
        
        if($_SESSION['userID']===$row['postID']){
            $update='<a href="update.php">수정하기</a>';

        }
	}	
	else{
		$login= "비로그인 중..";
	}
	
    $list='';
    $list.='<div>'."<span>ID</span>";
    $list.="<span>제목</span>".'</div>';
    $list.="<span>내용</span>".'</div>';
	while($row=mysqli_fetch_array($result)){
		
        if($row['title']===$title){
            $list=$list."<div>{$row['postID']}</div>";
		    $list= $list."<div>{$row['title']}</div>";
            $list= $list."<div>{$row['content']}</div>";
        }
        
    }
    echo "$login";
    echo "$list";

   

	
?>