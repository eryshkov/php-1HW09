<?php

namespace Model;

class Log
{
    /**
     * @var string
     */
    protected $fileName = __DIR__ . '/../../logs/log.txt';

    /**
     * @param string $userName
     * @param string $info
     */
    public function write(string $userName, string $info): void
    {
        $date = date(DATE_ATOM);
        $logString = [$date, $userName, $info];
        file_put_contents($this->fileName, implode(' | ', $logString) . PHP_EOL, FILE_APPEND);
    }
}