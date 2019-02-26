<?php
require_once __DIR__ . '/autoload.php';

$myGuestBook = new \Model\GuestBook();

if (isset($_POST['message'])) {
    //Применил возврат $this из метода, что дает возможность сразу вызвать следующий метод
    $myGuestBook->append($_POST['message'])->save();

    header('Location: /index.php?page=guestbook/');
    exit;
} else {
    http_response_code(400);
}