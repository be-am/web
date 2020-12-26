<?php
    include_once "validation.php";
    
    $commentID=$_GET['commentID'];
    echo "$commentID";
    
    validate($commentID);

    $sql="SELECT * FROM comment WHERE id=$_GET[id]";

    $return= mq($sql);
    $row=mysqli_fetch_array($return);
?>

<html lang="en">
<head>
</head>
<body>
    <form action="updateCommentOk.php?commentID=<?=$row['commentID']?>&id=<?=$row['id']?>&postID=<?=$_GET['postID']?>" method="post">
        <input type="text" name="comment" value="<?=$row['comment']?>"/>
        <input type="submit"/>
    </form>
</body>
</html>