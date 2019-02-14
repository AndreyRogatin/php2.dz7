<?php

namespace App\Controllers\Admin;


use App\Models\Article;

class Update extends Controller
{
    protected function handle()
    {
        $this->view->article = Article::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../../templates/admin/update.php');
    }
}