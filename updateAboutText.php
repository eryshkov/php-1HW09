<?php
session_start();

require_once __DIR__ . '/autoload.php';

$users = new \Services\Users();
$currentUser = $users->getCurrentUser();

if (null === $currentUser) {
    header('Location:' . '/admin.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aboutTextBlocks = new \Model\AboutText();
    $textBlock = $aboutTextBlocks->getTextBlockWith($id);
} else {
    header('Location:' . '/index.php?edited=0');
    exit();
}

$menu = new \Model\Menu();
$menuItems = $menu->getVisibleItems('index');

$view = new \View\View();
$view->assign('menuItems', $menuItems);
$view->assign('textBlock', $textBlock);
$view->assign('currentUser', $currentUser);
$view->display(__DIR__ . '/templates/updateAbout.php');

