<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $pdo =  new PDO("mysql:host=localhost;dbname=amnhac", "root", "buituantu");

}catch (PDOException $e){
    echo "Ket noi khong thanh cong";
}
$ma_tgia = $_POST['ma_tgia'];
$ten_tgia = $_POST['ten_tgia'];
$hinh_tgia = $_POST['hinh_tgia'];

$sql = "UPDATE tacgia SET ten_tgia = '$ten_tgia', hinh_tgia = '$hinh_tgia' WHERE ma_tgia = $ma_tgia ";
$stmt = $pdo->prepare($sql);
$stmt->execute();

if($stmt->rowCount()>0){
    $mes = 'thanhcong';
}
else{
    $mes = 'khongthanhcong';
}

header("location:../index.php?mes=$mes");