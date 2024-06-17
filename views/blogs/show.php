<?php require 'views/partials/head.php';?>
<?php include 'views/partials/navigation.php';?>

<main class="container">
    <h1>A single post with id: <?= $post['id'] ?></h1>
    <h2><?= $post['title'] ?></h2>
    <p><?= $post['content'] ?></p>
</main>

<?php require 'views/partials/footer.php';?>