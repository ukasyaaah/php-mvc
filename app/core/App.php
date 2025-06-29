<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];


    function __construct()
    {
        $url = $this->parseURL();

        // controller
        // adaga file di folder controller yg namanya seperti / sesuai yg kita tulis
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        // class nya di instansiasi biar bisa manggil method nya
        $this->controller = new $this->controller;

        // kelola method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Kelola parameter
        if (!empty($url)) {

            // ambil datanya
            $this->params = array_values($url);
        }

        // Jalankan controller, method & kirim parameter klo ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    function parseURL()
    {
        if (isset($_GET['url'])) {
            // rtrim : bersihkan tanda slash diakhir url
            $url = rtrim($_GET['url'], '/');

            // Bersihkan url dari karakter2 aneh
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Pisah url dengan / menggunakan explode
            $url = explode('/', $url);

            return $url;
        }
    }
}
