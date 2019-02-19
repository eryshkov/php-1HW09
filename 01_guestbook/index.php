<?php

require_once __DIR__ . '/autoload.php';

$myGuestBook = new \App\Models\GuestBook(__DIR__ . '/guestBook.txt');
$guestBookRecords = $myGuestBook->getData();

$view = new \App\View();
$view->assign('guestBookRecords', $guestBookRecords);
$view->display(__DIR__ . '/templates/guestBookBasic.php');


