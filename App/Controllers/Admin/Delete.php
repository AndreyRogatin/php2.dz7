<?php

namespace App\Controllers\Admin;


use App\Models\Article as ArticleModel;

class Delete extends Controller
{

    protected function handle()
    {
        $article = ArticleModel::findById($_GET['id']);
        $article->delete();

        header('Location: /Admin/Index/action');
        die();
    }
}