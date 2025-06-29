<?php

class About extends Controllers
{



    function index($name = 'Ukhasyah', $title = 'Programmer', $judul = 'Halaman')
    {
        $data['name'] = $name;
        $data['title'] = $title;
        $data['judul'] = 'About';

        // Panggil / Tampilkan view & Kirim data

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    // awal2 gabisa krn gada method index
    function page()
    {
        $data['judul'] = "About's Page";
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
