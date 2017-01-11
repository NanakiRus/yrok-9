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
            $this->objArr[] = new GuestBookRecord($record);
        }
    }

    public function getData()
    {
        return $this->objArr;
    }

    public function deleteRecord($id)
    {
        $sql = 'DELETE FROM guestBook WHERE id = :id';
        $this->db->execute($sql, [':id' => $id]);
    }

    public function addRecord($author, $text)
    {
        $date = date("Y-m-d H:i:s");
        $sql = 'INSERT INTO guestBook (date, author, text) VALUES (:date, :author, :text)';
        $this->db->execute($sql, [':date' => $date, ':author' => $author, ':text' => $text]);
    }

}