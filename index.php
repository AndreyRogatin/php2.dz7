<?php

use App\Db;
use App\Models\Person;
use App\Models\User;

require __DIR__ . '/autoload.php';


var_dump(Person::findAll());

$db = new Db;
var_dump($db->query('SELECT * FROM persons'));