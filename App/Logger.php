<?php

namespace App;


class Logger
{
    protected static $path = __DIR__ . '/log.txt';

    public static function log(\Exception $ex)
    {
        $str = time() . '|' . $ex->getFile() . '|' . $ex->getMessage() . PHP_EOL;
        file_put_contents(static::$path, $str, FILE_APPEND);
    }
}