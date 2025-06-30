<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db; // database handler

    function __construct()
    {
        $this->db = new Database;
    }

    function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
