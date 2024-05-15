<?php


class Database
{
    public PDO $connection;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=jottings;user=root;charset=utf8mb4';

        $this->connection = new PDO($dsn);
    }

    public function query(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'] ?? '';
            $comment = $_POST['comment'] ?? '';

            $statement = $this->connection->prepare('INSERT INTO jottings (name, comment) VALUES (:name, :comment)');
            $statement->bindParam(':name', $name);
            $statement->bindParam(':comment', $comment);

            $statement->execute();

        }
    }
}