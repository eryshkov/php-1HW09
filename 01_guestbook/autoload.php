<?php

function __autoload($class)
{
    $folder = str_replace('\\', '/', $class);
    $path = __DIR__ . '/' . $folder . '.php';
    require_once $path;
}