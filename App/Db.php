<?php

namespace App;


use App\Exceptions\DbException;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $conf = Config::getInstance()->data['db'];
        $dsn = 'mysql:host=' . $conf['host'] . ';dbname=' . $conf['dbname'];
        try {
            $this->dbh = new \PDO($dsn, $conf['login'], $conf['password']);
            $this->dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $ex) {
            throw new DbException('Ошибка соединения с БД', 0, $ex);
        }
    }

    public function query($sql, $params = [], $class = '')
    {
        try {
            $sth = $this->dbh->prepare($sql);
            $sth->execute($params);
        } catch (\PDOException $ex) {
            throw new DbException('Ошибка запроса к БД', 1, $ex, $sql);
        }

        if (empty($class)) {
            return $sth->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
    }

    public function execute($sql, $params = [])
    {
        try {
            $sth = $this->dbh->prepare($sql);
            $res = $sth->execute($params);
        } catch (\PDOException $ex) {
            throw new DbException('Ошибка запроса к БД', 2, $ex, $sql);
        }

        return $res;
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}