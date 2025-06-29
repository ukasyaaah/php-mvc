<?php

// Jadikan inheritance dengan class Controllers
class Home extends Controllers
{
    /* 
    Klo ga nulisin apapun di url, 
    maka method ini (index) yg akan dipanggil */
    public function index()
    {
        /* panggil view dri folder view, 
        ada ga folder home dgn file index */
        $data['judul'] = "Home";

        // Panggil class model, lalu panggil method di dalam nya & masukin isinya di data[nama]
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
