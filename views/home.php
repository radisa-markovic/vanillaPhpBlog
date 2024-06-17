<?php require 'partials/head.php' ?>
<?php require 'partials/navigation.php' ?>


<main class="container">
    <h1><?= $homeStuff ?></h1>
    <section class="grid">
        <?php foreach($blogposts as $blogpost): ?>
            <article style="border: 2px solid black;">
                <h1><?= $blogpost['title'] ?></h1>
                <p><?= $blogpost['content'] ?></p>
                <a href="/blogpost/<?= $blogpost['id'] ?>">
                    View more
                </a>
            </article>
        <?php endforeach;?>
    </section>
</main>

<?php require 'partials/footer.php' ?>