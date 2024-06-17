<?php
//TODO: add SQL database store logic
class Blog
{
    private static $blogPosts = [
        [
            "id" => 1,
            "title" => "Test blog title",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, ab."
        ],
        [
            "id" => 2,
            "title" => "Test 2 blog title",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, ab."
        ],
        [
            "id" => 3,
            "title" => "Test 3 blog title",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, ab."
        ],
    ];

    public static function index()
    {
        return self::$blogPosts;
    }

    public static function get($id)
    {
        foreach (self::$blogPosts as $post)
        {
            if($post['id'] == $id)
            {
                // dd($post);
                return $post;
            }
        }

        return null;
    }

    public static function add($newPost)
    {
        self::$blogPosts[] = $newPost;
    }
}