<?php require 'views/partials/head.php'?>
<?php require 'views/partials/navigation.php'?>

<h1>Create a blogpost</h1>
<form action="/newPost">
    <label for="title">
        Title:
        <input type="text" name="title" id="title"/>
    </label>

    <label for="content">
        Content:
        <textarea name="content" id="content">
        </textarea>
    </label>

    <button type="submit">
        Post
    </button>
</form>

<?php require 'views/partials/footer.php'?>