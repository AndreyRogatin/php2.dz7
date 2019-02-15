<?php

use App\Controllers\Admin\Index;

require __DIR__ . '/../autoload.php';

$uri = $_SERVER['REQUEST_URI'];
var_dump($uri);

$ctrl = new Index;
$ctrl->action();