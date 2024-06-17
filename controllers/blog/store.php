<?php
require 'models/Blog.php';

Blog::add([
    'title' => $_POST['title'],
    'content' => $_POST['content']
]);

redirect('/');