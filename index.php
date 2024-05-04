<?php
require_once __DIR__ . '/app/Models/Post.php';
require_once __DIR__ . '/app/layouts/head.php';
require_once __DIR__ . '/./config.php';
require_once __DIR__ . '/app/Models/DB.php';

$db = new DB(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

$posts = $db->getPosts();
?>

<body class="bg-dark">

    <?php require_once __DIR__ . '/app/layouts/header.php'; ?>

    <main>
        <div class="container w-50">
            <div class="row">

                <?php foreach ($posts as $key => $post) : ?>
                    <div class="col-12">
                        <div class="card my-4 mx-5 bg-light" style="box-shadow: 0 0 10px white;">
                            <div class="card-body">
                                <h5 class="card-title text-center fst-italic"><?= $post['title'] ?></h5>
                                <i class="fa-regular fa-user border rounded-circle p-2 bg-light"></i>
                                <span class="fw-bold">
                                    <?= $post['username'] ?>
                                </span>
                                <span class="text-secondary">
                                    · published at <?= $post['date'] ?>
                                </span>
                                <img style="aspect-ratio: 1; object-fit:cover;" src="https://picsum.photos/800/600?random=<?= $key ?> " class="card-img-top py-3" alt="post_image">

                                <div class="buttons fs-3 d-flex gap-3 pb-2">
                                    <a href="">
                                        <i class="fa-regular fa-heart text-black"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-regular fa-comment text-black"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-regular fa-share-from-square text-black"></i>
                                    </a>
                                </div>

                                <span class="text-secondary">
                                    Piace a <?= $post['likes'] ?> persone
                                </span>

                                <a href="" class="fw-bold d-block text-decoration-none text-black">
                                    <?= $post['username'] ?>
                                </a>


                                <?php foreach (json_decode($post['tags']) as $tag) : ?>
                                    <a href="" class="text-decoration-none"><?= '#' .  $tag ?></a>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </main>


    <?php require_once __DIR__ . '/app/layouts/footer.php'; ?>

</body>