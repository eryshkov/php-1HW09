<?php

require_once __DIR__ . '/autoload.php';



$view = new \View\View();
$view->assign('currentPage', $currentPage);
$view->display(__DIR__ . '/templates/about.php');