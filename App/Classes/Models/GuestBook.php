<?php

namespace App\Classes\Models;

class GuestBook
{
    protected $db;
    protected $objArr = [];

    public function __construct()
    {
        $this->db = new DB();
        $sql = 'SELECT * FROM guestBook';
        $getAllRecords = $this->db->query($sql, []);
        foreach ($getAllRecords as $record) {
            $this->objArr[] = new GuestBookRecords($record);
        }
    }

    public function getData()
    {
        return $this->objArr;
    }

}