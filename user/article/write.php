<?php
    if(isset($_GET["title"])){
    $title =  $_GET["title"];
    }
    else{
        $title="";
    }
    if(isset($_GET["body"])){
    $body =  $_GET["body"];
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
            <p><input type="text" name="title" placeholder="제목" value=<?=$title?>></p>
            <p><textarea name="body" placeholder="내용" value=<?=$body?>></textarea></p>
            <p><input type="submit"><p>
        </form>
        <a href="list.php">리스트</a>
    </span>
</body>
</html>