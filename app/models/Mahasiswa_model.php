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

    function tambahDataMahasiswa($data)
    {
        try {

            $query = "INSERT INTO " . $this->table . " (nama, nim, jurusan) VALUES (:nama, :nim, :jurusan)";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('jurusan', $data['jurusan']);

            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            echo "Error : "  . $e->getMessage();
        }
    }
}
