<?php

require_once __DIR__ . '/autoload.php';

$menu = new \Model\Menu();
$menuItems = $menu->getVisible('index');

$text = new \Model\AboutText();
$textBlocks = $text->getVisible();

$view = new \View\View();
$view->assign('menuItems', $menuItems);
$view->assign('textBlocks', $textBlocks);
$view->display(__DIR__ . '/templates/about.php');