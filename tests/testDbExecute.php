<?php

require __DIR__ . '/../autoload.php';

$sql = [
    'goodCreate' => 'CREATE TABLE testDbExecute (name TEXT)',
    'goodInsert' => 'INSERT INTO testDbExecute (name) VALUES (:name)',
    'goodUpdate' => 'UPDATE testDbExecute SET name=:name WHERE name=:name',
    'badInsert' => 'INSERT INTO tetDbExecute (name) VALUES (:name)',
    'badUpdate' => 'UPDATE tetDbExecute SET name=:name WHERE name=:name',
    'badDelete' => 'DELETE FROM tetDbExecute WHERE name=:name',
    'goodDelete' => 'DELETE FROM testDbExecute WHERE name=:name',
    'goodDrop' => 'DROP TABLE testDbExecute'
];

$params = [':name' => 'vasya'];

$db = new \App\Db;

assert(true === $db->execute($sql['goodCreate']));
assert(true === $db->execute($sql['goodInsert'], $params));
assert(true === $db->execute($sql['goodUpdate'], $params));
assert(false === $db->execute($sql['badInsert'], $params));
assert(false === $db->execute($sql['badUpdate'], $params));
assert(false === $db->execute($sql['badDelete'], $params));
assert(true === $db->execute($sql['goodDelete'], $params));
assert(true === $db->execute($sql['goodDrop']));