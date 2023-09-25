<?php
include "../connect.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    try{
        $pdo = new PDO("mysql:host=localhost; dbname=amnhac", "root", "buituantu" );
        echo "connect success";
    }catch(PDOException $e){
        echo "Error connecting to database".$e->getMessage();
    }

   $result = Mysql::check("select * from theloai where ma_tloai = '{$_GET['ma_tloai']}'");
   echo $result;
   if(!$result){
    $message = "Tên thể loại đã tồn tại";
    $type = "danger";
   }
   else{
    $message ="delete succses";
    $type = "success";
    $sql = "delete from baiviet where ma_tloai = '{$_GET['ma_tloai']}'";
    $query =  $pdo->prepare($sql);
    $query->execute();
    $sql = "delete from theloai where ma_tloai = '{$_GET['ma_tloai']}'";
    $query =  $pdo->prepare($sql);
    $query->execute();
    $pdo = null;
   }
   header("location: ../admin/category.php?message=" . $message . "&type=".$type);
?>