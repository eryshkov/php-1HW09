<?php

require_once __DIR__ . '/autoload.php';

$menu = new \Model\Menu();
$menuItems = $menu->getVisible('about');

$text = new \Model\AboutText();
$textBlocks = $text->getVisible();
var_dump($textBlocks);
die();

$view = new \View\View();
$view->assign('menuItems', $menuItems);
$view->display(__DIR__ . '/templates/about.php');