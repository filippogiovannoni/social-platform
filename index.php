<?php
require_once __DIR__ . '/app/Models/Post.php';
require_once __DIR__ . '/app/layouts/head.php';


$post1 = new Post(1, "Viaggio nell'arte", 'Filippo Giovannoni', "Cultura, storia e arte si fondono in un'esperienza unica: scopriamo insieme i tesori celati nelle sale del Louvre. Attraverso le opere dei grandi maestri, viaggiamo nel tempo e nello spazio, lasciandoci incantare dalla bellezza senza tempo dei capolavori dell'umanità. Un viaggio indimenticabile tra le meraviglie della creazione umana.", new Media(2, 'Photo', 'https://upload.wikimedia.org/wikipedia/commons/6/66/Louvre_Museum_Wikimedia_Commons.jpg', 1024), '23-04-2024', ['arte', 'storia'], '23-04-2024', '23-04-2024');



$post2 = new Post(1, 'Ricetta della nonna: Torta di mele perfetta', 'Filippo Giovannoni', "Immersi nella nostalgia delle tradizioni familiari, svelo il segreto di famiglia: la ricetta autentica della torta di mele della nonna. Un viaggio nei ricordi d'infanzia e nei profumi che riempivano la cucina, questa torta incarna l'amore e la dolcezza di generazioni passate. Preparati a deliziare i tuoi sensi e a creare nuovi ricordi con questa squisita delizia.",  new Media(2, 'Photo', 'https://www.fattoincasadabenedetta.it/wp-content/uploads/2019/08/torta-di-mele-semplice-SITO-copertina.jpg', 1024), '23-04-2024', ['cucina', 'ricette'], '23-04-2024', '23-04-2024');

$posts = [$post1, $post2];

?>

<body class="bg-dark">

    <?php require_once __DIR__ . '/app/layouts/header.php'; ?>

    <main>
        <div class="container w-50">
            <div class="row">

                <?php foreach ($posts as $post) : ?>
                    <div class="col-12">
                        <div class="card my-4 mx-5 bg-light" style="box-shadow: 0 0 10px white;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $post->title ?></h5>
                                <i class="fa-regular fa-user border rounded-circle p-2 bg-light"></i>
                                <span class="fw-bold">
                                    <?= $post->user ?>
                                </span>
                                <span>
                                    <?= $post->getDayDiff($post->created_at, date('Y/m/d')) ?> days ago
                                </span>
                                <img style="aspect-ratio: 3/4; object-fit:cover;" src="<?= $post->media->path ?>" class="card-img-top py-3" alt="post_image">

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

                                <span class="fw-bold">
                                    <?= $post->user ?>
                                </span>

                                <p class="d-inline"> <?= $post->caption ?></p>

                                <?php foreach ($post->tags as $tag) : ?>
                                    <span><?= '#' .  $tag ?></span>
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

</html>