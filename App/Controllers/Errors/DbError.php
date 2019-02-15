<?php

namespace App\Controllers\Errors;


use App\Exceptions\DbException;

class DbError extends Error
{
    public function __construct(DbException $ex)
    {
        parent::__construct($ex);
    }

    protected function handle()
    {
        $this->view->title = $this->ex->getMessage();
        $this->view->ex = $this->ex->getPrevious();
        $this->view->sql = $this->ex->getSql();
        $this->view->display(__DIR__ . '/../../templates/error.php');
    }
}