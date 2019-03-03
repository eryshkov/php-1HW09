<?php
session_start();

require_once __DIR__ . '/autoload.php';

if (isset($_POST['login'], $_POST['password'])) {
    $userName = $_POST['login'];
    $userPassword = $_POST['password'];
}

$menu = new \Model\Menu();
$menuItems = $menu->getVisibleItems('admin');

$view = new \View\View();
$view->assign('menuItems', $menuItems);

$users = new Model\Users();

if (isset($userName, $userPassword)) {
    if ($users->checkPassword($userName, $userPassword)) {
        $_SESSION['user'] = $userName;
    }else{
        $view->assign('info', 'Имя пользователя и пароль неверные');
    }
}

$currentUser = $users->getCurrentUser();

$view->assign('currentUser', $currentUser);
$view->display(__DIR__ . '/templates/admin.php');
