<?php

class Media
{
    function __construct(public int $id, public string $type, public string $path)
    {
        $this->id = $id;
        $this->type = $type;
        $this->path = $path;
    }
}
