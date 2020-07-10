<?php
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DATABASE', 'numverify');


function PDO()
{
    try {
        $pdo = new PDO("mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE . "", MYSQL_USER, MYSQL_PASSWORD);
        return $pdo;
    } catch (PDOException $e) {
        return 'Error: ' . $e->getMessage();
        die();
    }
}