<?php

namespace App\Models;


use App\Db;

class User
{
    protected static $table = 'users';

    public $id;
    public $login;
    public $password;
    public $email;

    public static function findAll()
    {
        $db = new Db;
        $sql = 'SELECT * FROM ' . self::$table;
        return $db->query($sql, [], self::class);
    }
}