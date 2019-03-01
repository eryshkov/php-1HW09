<?php
session_start();

require_once __DIR__ . '/autoload.php';

$users = new \Model\Users();
$currentUser = $users->getCurrentUserFrom($_SESSION);

if (null === $currentUser) {
    header('Location:' . '/admin.php');
    exit();
}

$imageUploader = new \Model\Uploader('image');
$uploadResult = $imageUploader->upload();

if (true === $uploadResult) {
    $log = new \Model\Log();
    $log->write($currentUser->getUserName(), 'image is saved');

    header('Location:' . '/gallery.php');
    exit;
} else {
    ?>Не удалось сохранить этот файл на сервере<?php
}