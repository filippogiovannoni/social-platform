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
    public function getPosts()
    {
        $sql =  "SELECT `users`.`username` AS `username`, `posts`.`title`, `posts`.`tags`, `posts`.`date`, COUNT(`likes`.`post_id`) AS likes
        FROM `posts`
        JOIN `users` ON `posts`.`user_id` = `users`.`id`
        LEFT JOIN `likes` ON `posts`.`id` = `likes`.`post_id`
        GROUP BY `posts`.`id`";


        $result = $this->connection->query($sql);

        // Create an array for query results
        $posts = [];
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }

        return $posts;
    }
}
