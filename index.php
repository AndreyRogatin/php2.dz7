<?php

use App\Db;
use App\Models\Article;
use App\Models\Person;
use App\Models\User;

require __DIR__ . '/autoload.php';


$articles = Article::findNLastArticles(3);

include __DIR__ . '/App/templates/index.php';