<?php

namespace App\Classes\Models;

class GuestBookRecords
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
}