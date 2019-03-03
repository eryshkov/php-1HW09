<?php
session_start();

require_once __DIR__ . '/autoload.php';

$users = new Model\Users();
$currentUser = $users->getCurrentUser();

if (null === $currentUser) {
    header('Location:' . '/admin.php');
    exit();
}

$imageUploader = new \Services\Uploader('image');
$uploadResult = $imageUploader->upload();

if (true === $uploadResult) {
    $log = new \Model\Log();
    $log->write($currentUser->getUserName(), 'image is saved');

    header('Location:' . '/gallery.php');
    exit;
} else {
    $menu = new \Model\Menu();
    $menuItems = $menu->getVisibleItems('gallery');

    $view = new \View\View();
    $view->assign('menuItems', $menuItems);
    $view->assign('info', 'Не удалось сохранить этот файл на сервере');
    $view->display(__DIR__ . '/templates/info.php');
}