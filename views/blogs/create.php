<?php require 'views/partials/head.php'?>
<?php require 'views/partials/navigation.php'?>

<main class="container">
    <h1>Create a blogpost</h1>
    <form action="/blogs/store" method="POST" class="new-post-form">
        <div class="form-row">
            <label for="title">
                Title:
            </label>
            <input type="text" name="title" id="title"/>
        </div>
    
        <div class="form-row">
            <label for="content">
                Content:
            </label>
            <textarea name="content" id="content" rows="5" style="resize:none;">
            </textarea>
        </div>
    
        <button type="submit" class="primary-button">
            Post
        </button>
    </form>
</main>

<?php require 'views/partials/footer.php'?>