<?php

namespace App\Controllers\Admin;


use App\Controllers\Controller;
use App\Models\Article as ArticleModel;

class Article extends Controller
{
    protected function handle()
    {
        $this->view->article = ArticleModel::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../../templates/admin/article.php');
    }
}