<?php

class Mahasiswa extends Controllers
{
    function index()
    {
        $data['judul'] = "Data Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    function detail($id)
    {
        $data['judul'] = "Detail Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');

      
    }
}
