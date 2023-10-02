<?php

$pdo =  new PDO("mysql:host=localhost;dbname=amnhac", "root", "buituantu");

// ROOT
// lch:300/asd/a?controller=tu&action=create
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'read';

if ($controller === 'home') {
    require_once './Controller/HomeController.php';
    $HomeController = new HomeController();
    if ($action === 'read') $HomeController->read();
    else if ($action === 'create') $HomeController->create();
    else if ($action === 'update') $HomeController->update();
    else if ($action === 'delete') $HomeController->delete();
} else if ($controller === 'tu') {
    require_once './Controller/TuController.php';
    $TuController = new TuController();
    if ($action === 'read') $TuController->read();
    else if ($action === 'create') $TuController->create();
    else if ($action === 'update') $TuController->update();
    else if ($action === 'delete') $TuController->delete();
}

else if ($controller === 'duc') {
    require_once './Controller/DucController.php';
    $DucController = new DucController();
    if ($action === 'read') $DucController->read();
    else if ($action === 'create') $DucController->create();
    else if ($action === 'update') $DucController->update();
    else if ($action === 'delete') $DucController->delete();
}

