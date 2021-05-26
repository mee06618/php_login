<?php
    $dbConn = mysqli_connect("localhost","LJY","LJY123414","emp") or die("fail");
    $title =  $_GET["title"];
    $body =  $_GET["body"];
    $sql = "update article set title=$title,body=$body";
    $rs = mysqli_query($dbConn,$sql);
    

    if($rs>0){
        echo '<script>'; echo
         'alert("수정완료");'; 
         
         echo '</script>';
         echo "<script>location.replace('detail.php?id=$id')</script>";

    }
    else{
        echo '<script>'; echo
         'alert("수정실패");'; 
        
         echo '</script>';
         echo "<script>location.replace('write.php?title=$title&body=$body')</script>";
    }
    
?>
