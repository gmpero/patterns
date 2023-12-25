<?php

function db() {
    static $instance;

    if ($instance === null) {
        $host = 'localhost';
        $dbname = 'store';
        $username = 'root';
        $password = 'root';

        $dsn = "mysql:host=$host;dbname=$dbname";
        $instance = new PDO($dsn, $username, $password);
        $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $instance;
}

// получаем объект PDO для работы с БД
$db = db();

$sql = 'SELECT * FROM category';
foreach ($db->query($sql) as $row) {
    print_r($row);
}