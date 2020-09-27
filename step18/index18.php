<?php
class Post
{
    public $title;
    public $published;

    public function __construct($title,$published)

    {
        $this->$title = $title;
        $this->$published = $published;
    }
}
$posts = [
    new post('My First POST', true),
    new post('My Second POST', true),
    new post('My Third POST', false),
    new post('My Third POST', false),
];
$unpublishedPosts = array_filter($posts,function($post)
{
    return ! $post->published;
});

$posts = array_map(function ($post)
{
    return (array) $post;
}, $posts);

//$authors = array_colomn($posts,'author','title');

var_dump($posts);



?>