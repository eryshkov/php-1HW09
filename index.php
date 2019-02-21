<?php

require_once __DIR__ . '/autoload.php';

$dataBase = new DB(__DIR__ . '/config.php');

$pageName = 'about';

if (isset($_GET['page'])) {
    $pageName = $_GET['page'];
}

$sql = 'SELECT * FROM pages WHERE pageName=:pageName';
$currentPage = $dataBase->query($sql, [':pageName' => $pageName]);
//var_dump($currentPage['0']);
$currentPage = new Page($currentPage['0']);

$sql = 'SELECT * FROM pages';
$allPages = $dataBase->query($sql, []);
//var_dump($allPages);

$view = new View();
$view->assign('currentPage', $currentPage);
$view->assign('allPages', $allPages);
$view->display(__DIR__ . '/templates/main.php');