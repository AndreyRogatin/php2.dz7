<?php

use App\View;

require __DIR__ . '/../autoload.php';

$view = new View;
$view->display(__DIR__ . '/../App/templates/admin/create.php');