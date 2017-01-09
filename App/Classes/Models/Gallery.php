<?php

namespace App\Classes\Models;


class Gallery
{

    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getImage()
    {
        return array_slice(scandir($this->path), 2);
    }

}