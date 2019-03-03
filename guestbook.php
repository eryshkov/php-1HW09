<?php
session_start();

require_once __DIR__ . '/autoload.php';

$view = new \View\View();

if (isset($_GET['deleted'])) {
    $view->assign('deleted', (bool)$_GET['deleted']);
}

$menu = new \Model\Menu();
$menuItems = $menu->getVisibleItems('guestbook');

$guestBook = new \Model\GuestBook();
$guestBookRecords = $guestBook->getVisibleRecords();

$users = new Model\Users();
$currentUser = $users->getCurrentUser();

$view->assign('menuItems', $menuItems);
$view->assign('guestBookRecords', $guestBookRecords);
$view->assign('currentUser', $currentUser);
$view->display(__DIR__ . '/templates/guestbook.php');