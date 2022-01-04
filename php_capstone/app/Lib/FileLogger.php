<?php

namespace App\Lib;

class FileLogger implements ILogger
{
    static protected $file;

    public function __construct($file)
    {
        self::$file = $file;
    }

    public function write($event)
    {
        $fp = fopen(self::$file, 'ab');
        fwrite($fp, $event);
        fclose($fp);
    }

}