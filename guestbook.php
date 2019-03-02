<?php
require_once __DIR__ . '/autoload.php';

$menu = new \Model\Menu();
$menuItems = $menu->getVisibleItems('guestbook');

$guestBook = new \Model\GuestBook();
$guestBookRecords = $guestBook->getVisibleRecords();

$view = new \View\View();
$view->assign('menuItems', $menuItems);
$view->assign('guestBookRecords', $guestBookRecords);
$view->display(__DIR__ . '/templates/guestbook.php');