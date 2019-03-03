<?php
session_start();

require_once __DIR__ . '/autoload.php';

$users = new Model\Users();
$currentUser = $users->getCurrentUser();

if (null === $currentUser) {
    header('Location:' . '/admin.php');
    exit();
}

if (isset($_POST['id'], $_POST['text'], $_POST['order'], $_POST['isHidden'])) {
    $textBlock = new \Model\AboutTextBlock((int)$_POST['id'], $_POST['text'], (int)$_POST['order'], (bool)$_POST['isHidden']);

    $aboutText = new \Model\AboutText();
    $result = $aboutText->updateTextBlock($textBlock);

    if ($result) {
        header('Location:' . '/index.php?edited=1');
        exit();
    }
}

header('Location:' . '/index.php?edited=0');
exit();