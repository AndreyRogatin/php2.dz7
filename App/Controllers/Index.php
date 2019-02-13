<?php

namespace App\Controllers;


use App\Models\Article;

class Index extends Controller
{
    protected function handle()
    {
        $this->view->articles = Article::findNLastArticles(3);
        $this->view->display(__DIR__ . '/../templates/index.php');
    }
}