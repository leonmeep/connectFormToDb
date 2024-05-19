<?php


class Database
{
    public PDO $connection;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    public function nameQuery(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'] ?? '';


            $statement = $this->connection->prepare('INSERT INTO jottings (name) VALUES (:name)');
            $statement->bindParam(':name', $name);


            $statement->execute();

        }
    }

    public function commentQuery(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $comment = $_POST['comment'] ?? '';

            $statement = $this->connection->prepare('INSERT INTO jottings (comment) VALUES (:comment)');
            $statement->bindParam(':comment', $comment);
        }
    }
}