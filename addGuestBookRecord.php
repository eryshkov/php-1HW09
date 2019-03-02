<?php

require_once __DIR__ . '/autoload.php';

if (isset($_POST['author'])) {
    $author = $_POST['author'];
} else {
    $infoMessage[]= 'Пожалуйста, укажите имя автора сообщения';
}

if (isset($_POST['message'])) {
    $message = $_POST['message'];
} else {
    $infoMessage[]= 'Текст сообщения не может быть пустым';
}

$menu = new \Model\Menu();
$menuItems = $menu->getVisibleItems('gallery');

$view = new \View\View();

if (isset($infoMessage)) {
    $view->assign('menuItems', $menuItems);
    $view->assign('info', implode('. ', $infoMessage));
    $view->display(__DIR__ . '/templates/info.php');
    exit();
}

$guestBook = new \Model\GuestBook();
$newRecord = new \Model\GuestBookRecord(0, $message, $author, false, false);
$result = $guestBook->saveRecord($newRecord);

if (false === $result) {
    $view->assign('menuItems', $menuItems);
    $view->assign('info', 'Не удалось записать сообщение');
    $view->display(__DIR__ . '/templates/info.php');
    exit();
} else {
    header('Location:' . '/guestbook.php');
    exit();
}

