<?php

namespace App\Classes;


class Gallery
{

    protected $data;

    public function __construct($path)
    {
        $this->data = array_slice(scandir($path), 2);
    }

    public function getImages()
    {
        return $this->data;
    }

}