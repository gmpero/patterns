<?php

final class Connection
{
    private static ?self $instance = null;
    private static string $name;

    public static function getName(): string
    {
        return self::$name;
    }

    public static function setName(string $name): void
    {
        self::$name = $name;
    }

    private function __construct() {
        $host = 'localhost';
        $dbname = 'store';
        $username = 'root';
        $password = 'root';

        $dsn = "mysql:host=$host;dbname=$dbname";
        $this->db = new PDO($dsn, $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function query($sql) {
        return $this->db->query($sql);
    }

    public function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
    }
}

$connection = Connection::getInstance();
$connection::setName('Laravel');

$connection2 = Connection::getInstance();

$sql = 'SELECT * FROM category';
foreach ($connection->query($sql) as $row) {
    print_r($row);
}

var_dump($connection::getName());

