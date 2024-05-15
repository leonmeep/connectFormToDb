<?php


class Database
{
    public PDO $connection;

    public function __construct($config)
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
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