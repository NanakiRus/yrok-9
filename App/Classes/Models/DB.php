<?php

namespace App\Classes\Models;

class DB
{
    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/../../../connect/config.php';
        $this->dbh = new \PDO($config['dsn'], $config['login'], $config['pwd']);
    }

    public function execute(string $sql, array $data)
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function query(string $sql, array $data)
    {
        $sth = $this->dbh->prepare($sql);
        if (true == $sth->execute($data)) {
            return $sth->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

}