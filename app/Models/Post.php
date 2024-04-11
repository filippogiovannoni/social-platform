<?php

class Post
{
    public $id;
    public $title;
    public $media;
    public $date;
    public $tags;
    public $created_at;
    public $updated_at;

    function __construct(int $id, string $title, Media $media, string $date, string $tags, string $created_at, string $updated_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->tags = $tags;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
};
