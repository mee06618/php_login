<?php
    $dbConn = mysqli_connect("localhost","LJY","LJY123414","emp") or die("fail");
    $title =  $_GET["title"];
    $body =  $_GET["body"];
    $sql = "insert into article set regdate=now(),title=$title,body=$body";
    $rs = mysqli_query($dbConn,$sql);
    
    mysqli_close($dbConn);
    $dbConn = mysqli_connect("localhost","LJY","LJY123414","emp") or die("fail");
    $sql2 = "SELECT MAX(id) FROM article";
    $rs2 = mysqli_query($dbConn,$sql2);

    if($temp=mysqli_fetch_assoc($rs2)){

        $id=$temp["id"];
    }
    if($rs>0){
        echo '<script>'; echo
         'alert("입력완료");'; 
         
         echo '</script>';
         echo "<script>location.replace('detail.php?id=$id')</script>";

    }
    else{
        echo '<script>'; echo
         'alert("입력실패");'; 
        
         echo '</script>';
         echo "<script>location.replace('write.php?title=$title&body=$body')</script>";
    }
    
?>
