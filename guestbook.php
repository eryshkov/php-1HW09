<?php
session_start();

require_once __DIR__ . '/autoload.php';

$menu = new \Model\Menu();
$menuItems = $menu->getVisibleItems('guestbook');

$guestBook = new \Model\GuestBook();
$guestBookRecords = $guestBook->getVisibleRecords();

$users = new \Services\Users();
$currentUser = $users->getCurrentUser();

$view = new \View\View();
$view->assign('menuItems', $menuItems);
$view->assign('guestBookRecords', $guestBookRecords);
$view->assign('currentUser', $currentUser);
$view->display(__DIR__ . '/templates/guestbook.php');