<?php
    $id =  $_GET["id"];
   $dbConn = mysqli_connect("localhost","LJY","LJY123414","emp") or die("fail");
   $sql = "select * from article where id= $id";
   $rs = mysqli_query($dbConn,$sql);
   
   $article=[];
   while($article= mysqli_fetch_assoc($rs)){
       
   }


    if(!isset($article["title"])){
    $title =  $article["title"];
    }
    else{
        $title="";
    }
    if(!isset($article["body"])){
    $body =  $article["body"];
    }
    else{
        $body="";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>입력</title>
    <link rel="stylesheet" href="/common.css">
</head>
<body>
   

    <span>
        <form action="doWrite.php">
            <p><input type="hidden" name="id" value=<?=$id?>></p>
            <p><input type="text" name="title" placeholder="제목" value=<?=$title?>></p>
            <p><textarea name="body" placeholder="내용" value=<?=$body?>></textarea></p>
            <p><input type="submit"><p>
        </form>
        <a href="list.php">리스트</a>
    </span>
</body>
</html>