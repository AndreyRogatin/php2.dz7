<?php

namespace App\Controllers;


use App\Models\Article;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Index extends Controller
{
    protected function handle()
    {
        $loader = new FilesystemLoader(__DIR__ . '/../templates');
        $twig = new Environment($loader);
        $template = $twig->load('index.php');
        echo $template->render([
            'articles' => Article::findNLastArticles(3)
        ]);
    }
}