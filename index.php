<?php

require_once __DIR__ . '/app/database/db.php';
require_once __DIR__ . '/app/Models/Post.php';

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="bg-white">

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
                    <a href="#">
                        <img height="85px" style="filter: invert(1);" src="./app/assets/img/Community_Logo-removebg-preview.png" alt="logo">
                    </a>
                    <ul class="navbar-nav mb-2 mb-lg-0 gap-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <table class="table mt-3 table-dark text-center border border-dark ms-5">
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
                            <td><?= $username ?></td>
                            <td><?= $received_likes ?></td>
                        </tr>

                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <div style="height: 100px;" class="text-secondary justify-content-center align-items-center text-emphasis d-flex">
            <em>Made by Booleaner @filippogiovannoni</em>
        </div>
    </footer>



</body>

</html>