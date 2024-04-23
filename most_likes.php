<?php
require_once __DIR__ . '/app/database/db.php';
require_once __DIR__ . '/app/Models/Post.php';
require_once __DIR__ . '/app/layouts/head.php';
require_once __DIR__ . '/app/layouts/header.php';

$sql = "SELECT `users`.`id`, `users`.`username`, COUNT(`likes`.`post_id`) AS `received_likes`
FROM users
JOIN likes 
ON `users`.`id` = `likes`.`user_id`
GROUP BY `users`.`id`
ORDER BY `received_likes` DESC";

$result = $connection->query($sql);

// var_dump($result);

if ($result && $result->num_rows > 0) {
    // while ($row = $result->fetch_assoc()) {
    //     // var_dump($row);
    // }
}

$connection->close();
?>

<body class="bg-dark">

    <main>
        <div class="container">
            <table class="table mt-3 table-dark text-center border border-dark">
                <thead>
                    <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Received Likes</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($row = $result->fetch_assoc()) :
                        ['id' => $id, 'username' => $username, 'received_likes' => $received_likes] = $row; ?>

                        <tr>
                            <th scope="row"><?= $id ?></th>
                            <td style="width: 33%;"><?= $username ?></td>
                            <td style="width: 33%;"><?= $received_likes ?></td>
                        </tr>

                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>
    <?php require_once __DIR__ . '/app/layouts/footer.php'; ?>
</body>

</html>