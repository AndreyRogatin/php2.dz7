<?php

namespace App\Models;


use App\Db;

class Person
{
    protected static $table = 'persons';

    public $id;
    public $firstName;
    public $lastName;
    public $age;

    public static function findAll()
    {
        $db = new Db;
        $sql = 'SELECT * FROM ' . self::$table;
        return $db->query($sql, [], self::class);
    }
}