<?php

namespace Model;

class Log
{
    protected $fileName = __DIR__ . '/../../img/log.txt';

    public function write(string $userName, string $info): void
    {
        $date = date(DATE_ATOM);
        $logString = [$date, $userName, $info];
        file_put_contents($this->fileName, implode(' | ', $logString) . PHP_EOL, FILE_APPEND);
    }
}