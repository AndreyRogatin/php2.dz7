<?php

use App\Db;
use App\Models\Article;
use App\Models\Person;
use App\Models\User;

require __DIR__ . '/autoload.php';


var_dump(Article::findNLastArticles(3));