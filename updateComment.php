<?php
include_once "validation.php";
include_once "url_create.php";
include_once "directAccess.php";
include_once "apis/query.php";

$validateID = $_GET['commentID'];
    
validate($validateID);

$sql = selectId('comment','id',$_GET['id']);

$return = mq($sql);
$row = mysqli_fetch_array($return);


$url_query = createUrlQuery("updateCommentOk.php",array('commentID',$row['commentID'],'id',$row['id'],'postID',$_GET['postID']));

?>

<html lang="en">
<head>
</head>
<body>
    <form action="<?=$url_query?>" method="post">
        <input type="text" name="comment" value="<?=$row['comment']?>"/>
        <input type="submit"/>
    </form>
</body>
</html>