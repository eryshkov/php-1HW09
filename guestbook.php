<?php
require_once __DIR__ . '/autoload.php';

$menu = new \Model\Menu();
$menuItems = $menu->getVisibleItems('guestbook');


$view = new \View\View();
$view->assign('menuItems', $menuItems);
$view->display(__DIR__ . '/templates/guestbook.php');