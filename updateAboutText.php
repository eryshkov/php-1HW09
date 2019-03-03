<?php
session_start();

require_once __DIR__ . '/autoload.php';

$users = new \Services\Users();
$currentUser = $users->getCurrentUser();

if (null === $currentUser) {
    header('Location:' . '/admin.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aboutTextBlocks = new \Model\AboutText();
    $result = $aboutTextBlocks->getTextBlockWith($id);

    if (isset($result)) {
        //show edit form
    }
}

header('Location:' . '/index.php?edited=0');
exit();