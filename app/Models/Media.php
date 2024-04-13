<?php

class Media
{
    function __construct(public int $id, public string $type, public string $path, public int $size)
    {
        $this->id = $id;
        $this->type = $type;
        $this->path = $path;
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}
