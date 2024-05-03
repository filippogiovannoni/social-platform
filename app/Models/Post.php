<?php
require_once __DIR__ . '/Media.php';

class Post
{

    function __construct(public int $id, public string $title, public string $user, public string $caption, public Media $media, public string $date, public array $tags, public string $created_at, public string $updated_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->user = $user;
        $this->caption = $caption;
        $this->date = $date;
        $this->tags = $tags;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function getDayDiff($date1, $date2)
    {
        $day_diff = date_diff(date_create($date1), date_create($date2))->format('%a');

        return $day_diff;
    }
};
