<?php

require_once __DIR__ . '/autoload.php';

$menu = new \Model\Menu();
$menuItems = $menu->getVisible('about');

$view = new \View\View();
$view->assign('currentPage', $currentPage);
$view->display(__DIR__ . '/templates/about.php');