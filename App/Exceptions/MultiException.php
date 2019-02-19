<?php

namespace App\Exceptions;


class MultiException extends \Exception
{
    protected $errors = [];

    public function add(\Exception $ex)
    {
        $this->errors[] = $ex;
    }

    public function all()
    {
        return $this->errors;
    }

    public function empty(): bool
    {
        return empty($this->errors);
    }
}