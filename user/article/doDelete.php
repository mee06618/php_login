<?php
    $dbConn = mysqli_connect("localhost","LJY","LJY123414","emp") or die("fail");
    $id =  $_GET["id"];
    $sql = "delete from article where id=$id";
    $rs = mysqli_query($dbConn,$sql);
    

    if($rs>0){
        echo '<script>'; echo
         'alert("삭제완료");'; 
         
         echo '</script>';
         echo "<script>location.replace('list.php')</script>";

    }
    else{
        echo '<script>'; echo
         'alert("삭제실패");'; 
         
         echo '</script>';
         echo "<script>location.replace('delete.php')</script>";
    }
?>