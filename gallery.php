<?php

require_once __DIR__ . '/autoload.php';

$menu = new \Model\Menu();
$menuItems = $menu->getVisible('gallery');

$images = new \Model\Images();
$imagesList = $images->getAllImages();

$view = new \View\View();
$view->assign('menuItems', $menuItems);
$view->assign('imagesList', $imagesList);
$view->display(__DIR__ . '/templates/gallery.php');