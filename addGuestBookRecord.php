<?php

require_once __DIR__ . '/autoload.php';

if (isset($_POST['author'])) {
    $author = trim($_POST['author']);
    if (0 === strlen($author)) {
        $infoMessage[] = 'Пожалуйста, укажите имя автора сообщения';
    }
} else {
    $infoMessage[] = 'Пожалуйста, укажите имя автора сообщения';
}

if (isset($_POST['message'])) {
    $message = trim($_POST['message']);
    if (0 === strlen($message)) {
        $infoMessage[] = 'Текст сообщения не может быть пустым';
    }
} else {
    $infoMessage[] = 'Текст сообщения не может быть пустым';
}

$menu = new \Model\Menu();
$menuItems = $menu->getVisibleItems('guestbook');

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

