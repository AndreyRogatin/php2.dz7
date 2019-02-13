<?php

namespace App\Controllers;


use App\Models\Article as ArticleModel;

class Article extends Controller
{
    protected function access()
    {
        return false;
    }

    protected function handle()
    {
        $this->view->article = ArticleModel::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../templates/article.php');
    }
}