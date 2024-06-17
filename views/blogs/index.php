<?php require 'views/partials/head.php'?>
<?php require 'views/partials/navigation.php'?>

<section class="grid container">
    <?php foreach($blogposts as $blogpost): ?>
        <article>
            <h1><?= $blogpost['title'] ?></h1>
            <p><?= $blogpost['content'] ?></p>
            <a href="/blogpost/<?= $blogpost['id'] ?>">
                View more
            </a>
        </article>
    <?php endforeach;?>
</section>

<?php require 'views/partials/footer.php'?>