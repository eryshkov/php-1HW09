<?php

require_once __DIR__ . '/autoload.php';

$dataBase = new \Model\DB();

$pageName = 'about';

if (isset($_GET['page'])) {
    $pageName = $_GET['page'];
}

$sql = 'SELECT * FROM pages WHERE pageName=:pageName';
$currentPage = $dataBase->query($sql, [':pageName' => $pageName]);

if (isset($currentPage['0'])) {
    $currentPage = new \Model\Page($currentPage['0']);

    $sql = 'SELECT * FROM pages ORDER BY `order`';
    $allPages = $dataBase->query($sql, []);
    $allPages = new \Model\Pages($allPages);

    $view = new \View\View();
    $view->assign('currentPage', $currentPage);
    $view->assign('allPages', $allPages);
    $view->display(__DIR__ . '/templates/main.php');
} else {
    ?>Page is not found<?php
}
