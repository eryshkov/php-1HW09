<?php
require_once __DIR__ . '/classes/GuestBook.php';

$myGuestBook = new GuestBook(__DIR__ . '/guestBook.txt');

if (isset($_POST['message'])) {
    //Применил возврат $this из метода, что дает возможность сразу вызвать следующий метод
    $myGuestBook->append($_POST['message'])->save();

    header('Location: /01_guestbook/');
    exit;
} else {
    http_response_code(400);
}



