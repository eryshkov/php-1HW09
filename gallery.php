<?php
session_start();

require_once __DIR__ . '/autoload.php';

$menu = new \Model\Menu();
$menuItems = $menu->getVisibleItems('gallery');

$images = new \Model\Images();
$imagesList = $images->getAllImages();

$users = new Model\Users();
$currentUser = $users->getCurrentUser();

$view = new \View\View();
$view->assign('menuItems', $menuItems);
$view->assign('imagesList', $imagesList);
$view->assign('currentUser', $currentUser);
$view->display(__DIR__ . '/templates/gallery.php');