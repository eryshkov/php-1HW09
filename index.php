<?php
session_start();

require_once __DIR__ . '/autoload.php';

$menu = new \Model\Menu();
$menuItems = $menu->getVisibleItems('index');

$text = new \Model\AboutText();
$textBlocks = $text->getVisibleBlocks();

$users = new \Services\Users();
$currentUser = $users->getCurrentUser();

$view = new \View\View();

if (isset($_GET['edited'])) {
    $view->assign('edited', (bool)$_GET['edited']);
}

$view->assign('menuItems', $menuItems);
$view->assign('textBlocks', $textBlocks);
$view->assign('currentUser', $currentUser);
$view->display(__DIR__ . '/templates/about.php');