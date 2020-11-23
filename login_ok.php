<?php

    $con =mysqli_connect('localhost','bin','1234','blog');

    $userID=$_POST['userID'];
    $userPassword=$_POST['userPassword'];
    

    $query="select * from USER_INFO WHERE userID='$userID' and userPassword='$userPassword'";

    $stmt=mysqli_query($con,$query);


    if($stmt){
        session_start();
        $_SESSION['userID']=$userID;
        $_SESSION['isLogged']= 1;
        header("Location: index.php");
    }else{
        echo "login fail";
    }
    

?>