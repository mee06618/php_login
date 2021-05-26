<?php
    $dbConn = mysqli_connect("localhost","LJY","LJY123414","emp") or die("fail");
    $sql = "select * from article";
    $rs = mysqli_query($dbConn,$sql);
    
    $article=[];
    while($article= mysqli_fetch_assoc($rs)){
        $articles[]=$article;
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
   
        <?php foreach($articles as $article){?>
            <div>
        이름 : <?=$article['id']?><br>
        날짜 : <?=$article['regdate']?><br>
        제목 : <?=$article['title']?><br>
        내용 : <?=$article['body']?><br>
        <form action="modify.php">
            <p><input type="hidden" name="id" value= <?=$article['id']?>></p>
            <p><input type="submit" value='수정'><p>
        </form>
        </div>
        <?php }?>
    

    <span>
        <form action="detail.php">
            <p><input type="text" name="id" placeholder="번호입력"></p>
            <p><input type="submit"><p>
        </form>
        <a href="write.php">글 작성</a>
    </span>
</body>
</html>