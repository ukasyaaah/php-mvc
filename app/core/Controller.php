<?php

class Controllers
{
    function view($view, $data = [])
    {
        require_once '../app/view/' . $view . '.php';
    }
}
