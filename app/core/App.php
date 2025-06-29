<?php

class App
{
    function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
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
