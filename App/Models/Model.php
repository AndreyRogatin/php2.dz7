<?php

namespace App\Models;


use App\Db;

abstract class Model
{
    protected static $table = '';

    public $id;

    public static function findAll()
    {
        $db = new Db;
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql, [], static::class);
    }

    public static function findById($id)
    {
        $db = new Db;
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $params = [':id' => $id];
        $res = $db->query($sql, $params, static::class);

        if (empty($res)) {
            return false;
        } else {
            return $res[0];
        }
    }

    public function insert()
    {
        $fields = get_object_vars($this);
        $sets = [];
        $values = [];
        $params = [];

        foreach ($fields as $key => $value) {
            if ('id' === $key) {
                continue;
            }
            $sets[] = $key;
            $values[] = ':' . $key;
            $params[':' . $key] = $value;
        }

        $sql = 'INSERT INTO ' . static::$table . ' (' . implode(', ', $sets) . ') 
                VALUES (' . implode(', ', $values) . ')';

        $db = new Db;
        $db->execute($sql, $params);
        $this->id = $db->getLastId();
    }

    public function update()
    {
        $fields = get_object_vars($this);
        $sets = [];
        $params = [];

        foreach ($fields as $key => $value) {
            $params[':' . $key] = $value;
            if ('id' === $key) {
                continue;
            }
            $sets[] = $key . '=:' . $key;
        }

        $sql = 'UPDATE ' . static::$table . ' 
                SET ' . implode(', ', $sets) . ' 
                WHERE id=:id';

        $db = new Db;
        $db->execute($sql, $params);
    }

    public function save()
    {
        if (isset($this->id)) {
            $this->update();
        } else {
            $this->insert();
        }
    }
}