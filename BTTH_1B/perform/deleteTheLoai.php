<?php
 $pdo = new PDO("mysql:host=localhost;dbname=amnhac","root","buituantu");
    $sql = "DELETE FROM `theloai` WHERE ma_tloai = {$_GET['id']}";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount()>0){
        header('Location:http://localhost/CSE485_0923/BTTH_1B/admin/category.php?message=Xóa thành công&type=success');
    }
    else{
        header('Location:http://localhost/CSE485_0923/BTTH_1B/admin/category.php?message=Xóa thất bại&type=danger');
    }

?>