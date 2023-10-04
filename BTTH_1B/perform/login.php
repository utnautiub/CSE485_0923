<?php
    session_start();
    if(!isset($_SESSION['loginSuccess'])){
        header('Location:http://localhost/CSE485_0923/BTTH_1B/login.php');
    }
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

   $pdo = new PDO("mysql:host=localhost;dbname=amnhac","root","buituantu");
    $sql = "SELECT * FROM `users` where userName = '$_POST[userName]' and userPassword = '$_POST[userPassword]'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount();
    $data = $stmt->fetch();
    if($data['permision'] == 0){
        $_SESSION['loginCategory'] = true;
        $_SESSION['loginSuccess'] = true;
        header("Location:http://localhost/CSE485_0923/BTTH_1B/admin/index.php?id={$_SESSIOIN['loginCategory']}");
    }
    else{
        unset($_SESSION['loginCategory']);
        header('Location:http://localhost/CSE485_0923/BTTH_1B/admin/index.php');
    }
    if($stmt->rowCount()>0){
        $_SESSION['loginSuccess'] = true;
        header('Location:http://localhost/CSE485_0923/BTTH_1B/admin/index.php');
    }
    else{
        header('Location:http://localhost/CSE485_0923/BTTH_1B/login.php');
    }

?>