<?php
require_once __DIR__ . '/app/Models/DB.php';
require_once __DIR__ . '/./config.php';
require_once __DIR__ . '/app/layouts/head.php';

$db = new DB(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

$results = $db->getResults();

?>

<body class="bg-dark">
    <?php require_once __DIR__ . '/app/layouts/header.php'; ?>

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

                    <?php foreach ($results as $result) :
                        ['id' => $id, 'username' => $username, 'received_likes' => $received_likes] = $result; ?>

                        <tr>
                            <th scope="row"><?= $id ?></th>
                            <td style="width: 33%;"><?= $username ?></td>
                            <td style="width: 33%;"><?= $received_likes ?></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <?php require_once __DIR__ . '/app/layouts/footer.php'; ?>
</body>

</html>