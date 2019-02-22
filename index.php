<?php

require_once __DIR__ . '/autoload.php';

$dataBase = new \Model\DB();

if (isset($_GET['page'])) {
    $pageName = $_GET['page'];
} else {
    $pageName = '';
}

$currentPage = new \Model\Page();
$currentPage->setPageFromDB($pageName);

$allPages = new \Model\Pages();

$view = new \View\View();
$view->assign('currentPage', $currentPage);
$view->assign('allPages', $allPages);
$view->display(__DIR__ . '/templates/main.php');