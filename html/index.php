<?php
phpinfo();
$PDO = new PDO('mysql:host=thinq_schema_mysql', 'root', 'pass', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$PDO->exec('CREATE DATABASE IF NOT EXISTS d;');
$st = $PDO->prepare('CREATE TABLE d.c(d BIGINT default :x);');
$st->bindValue('x', 3);
$st->execute();
