<?php

namespace App\Controllers;


use App\Models\Article as ArticleModel;
use App\View;

class Article
{
    public function action()
    {
        $view = new View;
        $view->article = ArticleModel::findById($_GET['id']);
        $view->display(__DIR__ . '/../templates/article.php');
    }
}