<?php

namespace App\Controllers\Errors;


use App\Exceptions\NotFoundException;
use App\Logger;

class NotFoundError extends Error
{
    public function __construct(NotFoundException $ex)
    {
        parent::__construct($ex);
    }

    protected function handle()
    {
        Logger::log($this->ex);
        $template = $this->loadTemplate('error.php');
        echo $template->render([
            'title' => 'Ошибка 404 - не найдено',
            'ex' => $this->ex
        ]);
    }
}