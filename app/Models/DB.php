<?php

class DB
{
    private $connection;

    public function __construct($host, $username, $password, $db_name)
    {
        // Connect
        $this->connection = new mysqli($host, $username, $password, $db_name);

        // Check connection
        if ($this->connection && $this->connection->connect_error) {
            echo 'Connection Failed: ' . $this->connection->connect_error;
        }
    }

    public function getResults()
    {
        $sql =  "SELECT `users`.`id`, `users`.`username`, COUNT(`likes`.`post_id`) AS `received_likes`
        FROM users
        JOIN likes 
        ON `users`.`id` = `likes`.`user_id`
        GROUP BY `users`.`id`
        ORDER BY `received_likes` DESC";

        $result = $this->connection->query($sql);

        // Create an array for query results
        $results = [];
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }

        return $results;
    }
}
