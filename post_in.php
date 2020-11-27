<?php
    
    error_reporting(E_ALL);

    ini_set("display_errors", 1);

    
    session_start();
	$con =mysqli_connect('localhost','bin','1234','blog');
    $sql ="SELECT * FROM post";

	$result = mysqli_query($con,$sql);
    


    $login='';
    $title=$_GET['title'];
    
    
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
		
        if($row['title']===$title){
            $list=$list."<div>{$row['postID']}</div>";
		    $list= $list."<div>{$row['title']}</div>";
            $list= $list."<div>{$row['content']}</div>";
            $id=$row['id'];
        }
        
    }
    
    
    echo "$login";
    echo "$list";

    
    
    echo '<p>'."<a href=update.php?id=$id>update</a>".'<p>';
    echo '<p>'."<a href=delete.php?id=$id>delete</a>".'<p>';
    
    echo '<p>'."<a href=index.php>되돌아가기</a>".'<p>';

   

	
?>