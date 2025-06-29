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
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
