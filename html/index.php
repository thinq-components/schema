<?php
$PDO = new PDO('mysql:host=thinq_schema_mysql', 'root', 'pass', [
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION
]);

$PDO->exec('CREATE DATABASE IF NOT EXISTS d;');
$PDO->exec('USE d;');

$st = $PDO->prepare('SHOW TABLES LIKE :x;');
$st->bindValue('x', 'x');
$st->execute();

phpinfo();
