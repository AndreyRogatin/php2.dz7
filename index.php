<?php

require __DIR__ . '/autoload.php';

if (!empty($_GET['ctrl'])) {
    $ctrlName = ucfirst($_GET['ctrl']);
} else {
    $ctrlName = 'Index';
}

if (!empty($_GET['act'])) {
    $action = $_GET['act'];
} else {
    $action = 'action';
}

$className = '\App\Controllers\\' . $ctrlName;

$ctrl = new $className;

try {
    $ctrl->$action();
} catch (\App\DbException $ex) {
    die($ex->getMessage());
}
