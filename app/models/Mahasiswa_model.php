<?php

class Mahasiswa_model
{

    private $dbh; // database handler
    private $statement;

    function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }

    function getAllMahasiswa() {
        $this->statement = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->statement->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
}
