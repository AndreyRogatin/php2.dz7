<?php

namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=php2';
        $this->dbh = new \PDO($dsn, 'root', '');
    }

    public function query($sql, $data = [], $class = '')
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        $res = $sth->fetchAll(\PDO::FETCH_ASSOC);

        if (empty($class)) {
            return $res;
        } else {
            $arr = [];

            foreach ($res as $item) {
                $obj = new $class;
                foreach ($item as $key => $value) {
                    $obj->$key = $value;
                }
                $arr[] = $obj;
            }
            return $arr;
        }
    }
}