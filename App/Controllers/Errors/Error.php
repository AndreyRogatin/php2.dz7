<?php

namespace App\Controllers\Errors;


use App\Controllers\Controller;

abstract class Error extends Controller
{
    protected $ex;

    public function __construct(\Exception $ex)
    {
        parent::__construct();
        $this->ex = $ex;
    }
}