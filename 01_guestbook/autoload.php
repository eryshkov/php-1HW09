<?php

function __autoload($class)
{
    $path = __DIR__ . '/classes/' . $class . '.php';
    require_once $path;
}