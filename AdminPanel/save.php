<?php

use App\Models\Article;

require __DIR__ . '/../autoload.php';

if (isset($_POST['id'])) {
    $article = Article::findById($_POST['id']);
} else {
    $article = new Article;
}

$article->title = $_POST['title'];
$article->body = $_POST['body'];
$article->save();

header('Location: /AdminPanel/');
die();