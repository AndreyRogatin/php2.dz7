<?php

namespace App\Controllers;


use App\View;

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View;
    }

    abstract protected function handle();

    public function action()
    {
        if ($this->access() === false) {
            die('Доступ закрыт');
        }
        $this->handle();
    }

    protected function access()
    {
        return true;
    }
}