<?php

namespace App\Controllers\Errors;


use App\Exceptions\DbException;
use App\Logger;

class DbError extends Error
{
    public function __construct(DbException $ex)
    {
        parent::__construct($ex);
    }

    protected function handle()
    {
        Logger::log($this->ex);
        $template = $this->twig->load('error.php');
        echo $template->render([
            'title' => $this->ex->getMessage(),
            'sql' => $this->ex->getSql(),
            'ex' => $this->ex->getPrevious()
        ]);
    }
}