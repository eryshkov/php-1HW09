<?php

require_once __DIR__ . '/autoload.php';

$view = new View();
$view->assign('page', 'about');
$view->display(__DIR__ . '/templates/main.php');