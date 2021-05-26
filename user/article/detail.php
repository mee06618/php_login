<?php
    $dbConn = mysqli_connect("localhost","LJY","LJY123414","emp") or die("fail");
    $id =  $_GET["id"];
    $sql = "select * from article where id=$id";
    $rs = mysqli_query($dbConn,$sql);
    
    $article=null;
    if($article= mysqli_fetch_assoc($rs)){
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
    <link rel="stylesheet" href="/common.css">
</head>
<body>
   
        <?php if(isset($article)){?>
            <div>
        이름 : <?=$article['id']?><br>
        날짜 : <?=$article['regdate']?><br>
        제목 : <?=$article['title']?><br>
        내용 : <?=$article['body']?><br>
        </div>
        <?php }else{?>
            <?=$id?>번 데이터가 없습니다
        <?php } ?>
    <span>
        <a href="list.php">리스트</a>
        
    </span>
</body>
</html>