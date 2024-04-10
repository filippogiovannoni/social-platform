<?php

require_once __DIR__ . '/database/db.php';

$sql = "SELECT `users`.`id`, `users`.`username`, COUNT(`likes`.`post_id`) AS `received_likes`
FROM users
JOIN likes 
ON `users`.`id` = `likes`.`user_id`
GROUP BY `users`.`id`
ORDER BY `received_likes` DESC";

$result = $connection->query($sql);

var_dump($result);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        var_dump($row);
    }
}

$connection->close();
