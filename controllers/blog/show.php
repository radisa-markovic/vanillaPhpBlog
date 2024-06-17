<?php
require 'models/Blog.php';

$uri = parse_url($_SERVER['REQUEST_URI']);
$postID = explode("=", $uri['query'])[1]; 

$blogpost = Blog::get($postID);
if($blogpost)
{
    return view('blogs/show.php', [
        'post' => $blogpost,
        'pageTitle' => $blogpost['title']
    ]);
}
else 
{
    return view('404.php', [
        'pageTitle' => 'Not found'
    ]);    
}