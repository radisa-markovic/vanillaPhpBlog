<?php

require 'models/Blog.php';

return view('blogs/index.php', [
    'uri' => $uri,
    'pageTitle' => 'Blogs',
    'blogposts' => Blog::index()
]);