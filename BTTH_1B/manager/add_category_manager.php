<?php
include "../connect.php";
echo $_POST['ten_tloai'];


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    try{
        $pdo = new PDO("mysql:host=localhost; dbname=amnhac", "root", "buituantu" );
        echo "connect success";
    }catch(PDOException $e){
        echo "Error connecting to database".$e->getMessage();
    }

   $result = Mysql::check("select * from theloai where ten_tloai = '{$_POST['ten_tloai']}'");
   echo $result;
   if($result){
    $message = "Tên thể loại đã tồn tại";
    $type = "danger";
   }
   else{
    $message ="success";
    $type = "success";
    $sql = "insert into theloai (ten_tloai) values ('{$_POST['ten_tloai']}')";
    $query =  $pdo->prepare($sql);
    $query->execute();
    $pdo = null;
   }
   header("location: ../admin/add_category.php?message=" . $message . "&type=".$type);
?>