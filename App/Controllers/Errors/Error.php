<?php

namespace App\Controllers\Errors;


use App\Controllers\Controller;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Error extends Controller
{
    protected $ex;

    public function __construct(\Exception $ex)
    {
        parent::__construct();
        $this->ex = $ex;
        $this->twig = new Environment(new FilesystemLoader(__DIR__ . '/../../templates/errors'));
    }
}