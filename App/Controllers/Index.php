<?php

namespace App\Controllers;


use App\Models\Article;

class Index extends Controller
{
    protected function handle()
    {
        $template = $this->loadTemplate('index.php');
        echo $template->render([
            'articles' => Article::findNLastArticles(3)
        ]);
    }
}