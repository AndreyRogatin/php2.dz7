<?php

namespace App;


class AdminDataTable
{
    protected $models = [];
    protected $funcs = [];

    public function __construct(iterable $models, iterable $funcs)
    {
        $this->models = $models;
        $this->funcs = $funcs;
    }

    public function render()
    {
        $view = new View;
        $view->models = $this->models;
        $view->funcs = $this->funcs;
        return $view->render(__DIR__ . '/templates/table.php');
    }
}