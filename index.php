<?php

include 'App/Db.php';

$db = new \App\Db();
var_dump($db->query('SELECT * FROM persons'));