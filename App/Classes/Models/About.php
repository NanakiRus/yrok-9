<?php

namespace App\Classes\Models;

class About
{
    protected $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getData()
    {
        return $this->db->query('SELECT * FROM about WHERE id=:id', ['id' => 1]);
    }

    public function setData($header, $text)
    {
        $sql = 'UPDATE about SET header = :header, text = :text WHERE id = 1';
        $data[':header'] = $header;
        $data[':text'] = $text;
        $this->db->execute($sql, $data);
    }

}