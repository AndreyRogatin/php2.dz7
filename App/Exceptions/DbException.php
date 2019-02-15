<?php

namespace App\Exceptions;


use Throwable;

class DbException extends \Exception
{
    protected $sql = '';

    public function __construct($message = '', $code = 0, Throwable $previous = null, $sql = '')
    {
        parent::__construct($message, $code, $previous);
        $this->sql = $sql;
    }

    public function getSql()
    {
        return $this->sql;
    }

}