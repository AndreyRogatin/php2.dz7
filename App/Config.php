<?php

namespace App;


class Config
{
    public $data = [];
    private static $instance;

    private function __construct()
    {
        $this->data = require __DIR__ . '/conf.php';
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if (empty(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }
}