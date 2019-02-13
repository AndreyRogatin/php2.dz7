<?php

namespace App\Controllers\Admin;


use App\Controllers\Controller;

class Create extends Controller
{
    protected function handle()
    {
        $this->view->display(__DIR__ . '/../../templates/admin/create.php');
    }
}