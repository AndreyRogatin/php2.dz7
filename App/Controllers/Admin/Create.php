<?php

namespace App\Controllers\Admin;


class Create extends Controller
{
    protected function handle()
    {
        $this->view->display(__DIR__ . '/../../templates/admin/create.php');
    }
}