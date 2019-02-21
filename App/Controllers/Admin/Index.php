<?php

namespace App\Controllers\Admin;


use App\AdminDataTable;
use App\Models\Article;

class Index extends Controller
{

    protected function handle()
    {
        $funcs = include __DIR__ . '/../../funcs.php';
        $models = [];
        foreach (Article::findAll() as $article) {
            $models[] = $article;
        }
        $table = new AdminDataTable($models, $funcs);
        $this->view->table = $table->render();

        $this->view->display(__DIR__ . '/../../templates/admin/index.php');
    }
}