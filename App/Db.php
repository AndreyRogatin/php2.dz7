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

    public function query($sql, $params = [], $class = '')
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);

        if (empty($class)) {
            return $sth->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }
}