<?php
require_once __DIR__ . '/Media.php';

class Post
{

    public $comments = [];

    function __construct(public int $id, public string $title, public Media $media, public string $date, public array $tags, public string $created_at, public string $updated_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->tags = $tags;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function addComment($comment)
    {
        $this->comments[] = $comment;
    }
};

$post1 = new Post(1, 'Viaggio al Mare', new Media(1, 'Video', 'jdnfnkdfnd', 1024), '23/04/2024', ['sole', 'mare'], '23/04/2024', '23/04/2024');
