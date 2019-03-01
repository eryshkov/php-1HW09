<?php
session_start();

require_once __DIR__ . '/autoload.php';

if (isset($_POST['login'])) {
    $userName = $_POST['login'];
} else {
    $userName = '';
}
if (isset($_POST['password'])) {
    $userPassword = $_POST['password'];
} else {
    $userPassword = '';
}

$users = new \Model\Users();
if ($users->checkPassword($userName, $userPassword)) {
    $_SESSION['user'] = $userName;
}

$currentUser = $users->getCurrentUserFrom($_SESSION);

$menu = new \Model\Menu();
$menuItems = $menu->getVisibleItems('admin');

$view = new \View\View();
$view->assign('menuItems', $menuItems);
$view->assign('currentUser', $currentUser);
$view->display(__DIR__ . '/templates/admin.php');
