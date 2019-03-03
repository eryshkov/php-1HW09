<?php
session_start();

require_once __DIR__ . '/autoload.php';

$users = new Model\Users();
$currentUser = $users->getCurrentUser();

if (null === $currentUser) {
    header('Location:' . '/admin.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $guestBook = new \Model\GuestBook();
    $result = $guestBook->deleteRecordWith($id);

    if ($result) {
        header('Location:' . '/guestbook.php?deleted=1');
        exit();
    }
}

header('Location:' . '/guestbook.php?deleted=0');
exit();