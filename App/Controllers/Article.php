<?php

namespace App\Controllers;


use App\Models\Article as ArticleModel;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Article extends Controller
{
    protected function handle()
    {
        $loader = new FilesystemLoader(__DIR__ . '/../templates');
        $twig = new Environment($loader);
        $template = $twig->load('article.php');
        echo $template->render([
            'article' => ArticleModel::findById($_GET['id'])
        ]);
    }
}