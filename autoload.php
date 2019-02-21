<?php

function __autoload($class)
{
    $folder = str_replace('\\', '/', $class);
    $path = __DIR__ . '/classes/' . $folder . '.php';
    require_once $path;
}