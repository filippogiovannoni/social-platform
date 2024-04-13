<?php

class Post
{

    public $comments = [];

    function __construct(public int $id, public string $title, public Media $media, public string $date, public string $tags, public string $created_at, public string $updated_at)
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
