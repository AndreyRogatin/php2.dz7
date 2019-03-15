<?php

namespace App\Controllers;


use App\Models\Article as ArticleModel;

class Article extends Controller
{
    protected function handle()
    {
        $template = $this->loadTemplate('article.php');
        echo $template->render([
            'article' => ArticleModel::findById($_GET['id'])
        ]);
    }
}